<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGroupRequest;
use App\Http\Requests\PostCommentRequest;
use App\Http\Requests\PostRequest;
use App\Models\Group;
use App\Models\GroupPost;
use App\Models\GroupPostComment;
use App\Models\User;
use App\Notifications\UserNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;

class GroupController extends Controller
{
    public function community()
    {
        $groups = Auth::user()->userGroup;
        return view('community', [
            'groups' => $groups
        ]);
    }



    public function createGroup(CreateGroupRequest $request)
    {
        $validated_data = $request->validated();
        DB::transaction(function () use($validated_data){
            Group::create([
                'name'=>$validated_data['name'],
                'type'=>$validated_data['type'],
                'introduction'=>$validated_data['introduction']
            ]);
        });
        return Redirect::route('community.community')->with('message', 'Book Created Successfully');
    }

    public function publicGroup()
    {
        $public_group = Group::onlyPublic()->get();
        return view('publicgroups', [
            'groups' => $public_group
        ]);
    }

    public function privateGroup()
    {
        $public_group = Group::onlyPrivate()->get();
        return view('privategroups', [
            'groups' => $public_group
        ]);
    }

    public function joinGroup(Request $request)
    {
        $group = Group::findOrFail($request->id);
        $group->userGroup()->attach(Auth::user()->id);

        Notification::send($group->userGroup()->get(), new UserNotification(Auth::user()->username . ' Join to Your Group'));
        return Redirect::route('community.community')->with('message', 'Book Created Successfully');
    }

    public function groupProfile($id)
    {
        $group = Group::findOrFail($id);
        return view('GroupProfile', [
            'group' => $group
        ]);
    }


    public function createPost($id)
    {
        $group = Group::with('groupPosts')->findOrFail($id);
        return view('CreatePost', [
            'group' => $group
        ]);
    }

    public function deletePost(Request $request)
    {
        $post = GroupPost::findOrFail($request->id);
        $post->delete();
        return Redirect::back()->with('message', 'Book Created Successfully');

    }

    public function createPostSubmit(PostRequest $request)
    {
        $validated_data = $request->validated();

        DB::transaction(function () use ($validated_data) {
            $group = Group::findOrFail($validated_data['id']);
            $group->groupPosts()->create([
                'user_id'=>Auth::user()->id,
                'title' => $validated_data['title'],
                'content' => $validated_data['content'],
            ]);
        });

        Notification::send(Auth::user(), new UserNotification("Your Post {$validated_data['title']} has been Successfully Created"));

        return Redirect::route('group-profile', $validated_data['id'])->with('message', 'Book Created Successfully');
    }

    public function likePost(Request $request)
    {
        $post = GroupPost::findOrFail($request->id);
        $post->update([
            'vote' => $post->vote + 1
        ]);

        Notification::send(User::find($post->user_id), new UserNotification("Your Post {$post['title']} has been Liked"));

        return Redirect::back()->with('message', 'post like Successfully');
    }

    public function postProfile($id)
    {
        $post = GroupPost::with('postComments')->findOrFail($id);
        return view('PostProfile', [
            'post' => $post
        ]);
    }

    public function postComment(PostCommentRequest $request)
    {
        $validated_data = $request->validated();

        $post = GroupPost::findOrFail($validated_data['id']);
        DB::transaction(function () use ($validated_data,$post) {
            $post->postComments()->create([
                'user_id' => Auth::user()->id,
                'comment' => $validated_data['content'],
            ]);
        });
        Notification::send(User::find($post->user_id), new UserNotification("Your Post {$post['title']} have a comment"));

        return Redirect::route('post-profile', $validated_data['id'])->with('message', 'Book Created Successfully');
    }

    public function likeComment(Request $request)
    {
        $comment = GroupPostComment::findOrFail($request->id);

        if (!$comment->postLikes()->where('user_id', Auth::user()->id)->exists()) {
            $comment->postLikes()->attach(Auth::user()->id);
        Notification::send(User::find($request->id), new UserNotification("Your Comment have a Like"));

        } else {
            $comment->postLikes()->detach(Auth::user()->id);
        Notification::send(User::find($request->id), new UserNotification("Your Comment have a Dislike"));

        }
        return Redirect::route('post-profile', $request->id)->with('message', 'Book Created Successfully');
    }
}
