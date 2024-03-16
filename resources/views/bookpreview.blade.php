<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img_srcs/gem.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Book Preview</title>
</head>
<body class="bg-dark">

<div class="container mx-auto mt-5">
    <div class="card">
        <div class="card-header flex justify-between items-center">
            <span class="text-xl font-bold text-center w-full">Book Preview</span>
            <a href="#" class="btn btn-secondary">Back</a>
        </div>
        <div class="card-body flex">
            <div class="w-28 h-30 bg-gray-500 rounded"></div>
            <div class="ml-4 flex-grow">
                <div class="flex justify-between items-center mb-2">
                    <h4 class="font-bold text-lg">Spanish Latte</h4> <!-- Book Title-->
                    <div class="flex items-center">
                        <span class="text-red-500 me-4 text-xl">&hearts;</span>
                    </div>
                </div>
                <div class="flex justify-between items-center mb-2">
                    <p class="text-gray-500">Genre: Sci-Fi</p>
                    <div class="flex items-center">
                        <button class="btn btn-secondary">Add</button>
                    </div>
                </div>
                <p class="text-gray-500">Category: Mystery</p>
                <div class="mt-4">
                    <h5 class="font-bold">Summary</h5>
                    <p class="text-gray-500">This story has no summary available.</p> <!--default-->
                </div>
            </div>
        </div>
        <div class="card-footer flex justify-end items-center">
            <button class="btn btn-secondary me-3">Edit Book</button>
            <button class="btn btn-danger">Unpublish</button>
        </div>
    </div>
</div>

</body>
</html>
