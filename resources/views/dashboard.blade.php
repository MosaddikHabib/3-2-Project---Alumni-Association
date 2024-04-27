<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div> -->
            </div>
        </div>
    </div>

    <section class = "DashBoard py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 -6 bg-white border-b border-gray-200 divission">
        <div class ="side-panel ">
            <div><a href="#create-post">Create Post</a></div>
            <div><a href="#notice">Notice</a></div>
            <div><a href="#user-list">User List</a></div>
            <div><a href="#user-detail">User Details</a></div>
            <div><a href="#">Log Out</a></div>
        </div>
        <div class = "work-place">
            <div class ="create-post" id = "create-post">
                <h2 class="create-post-title">Create a Post</h2>
                <div id="drop-area">
                    <form action="" class="my-class">
                        <p>Drag and Drop your Cover Photo</p>
                        <input type="file" id="fileInput">
                    </form>
                    <div id="fileList">
                        <!-- nothin -->
                    </div>
                </div>
                <div class="post-area">
                    <h3>Post Title</h3>
                    <input type="text" class="post-title">
                    <!-- main post description  -->
                    <h3>Post Description</h3>
                    <textarea name="" id="" class = "post-description"></textarea>
                    <button type="submit" class="submit-btn">Submit Post</button>
                </div>
                <script>
                    const dropArea = document.getElementById('drop-area');
                    const fileInput = document.getElementById('fileInput');
                    const fileList = document.getElementById('fileList');

                    // Handle file input change
                    fileInput.addEventListener('change', function () {
                        handleFiles(this.files);
                    });

                    // Handle drag and drop
                    dropArea.addEventListener('dragenter', function (e) {
                        e.preventDefault();
                        this.className = 'drop-area drag-over';
                    });

                    dropArea.addEventListener('dragleave', function (e) {
                        e.preventDefault();
                        this.className = 'drop-area';
                    });

                    dropArea.addEventListener('dragover', function (e) {
                        e.preventDefault();
                    });

                    dropArea.addEventListener('drop', function (e) {
                        e.preventDefault();
                        this.className = 'drop-area';
                        handleFiles(e.dataTransfer.files);
                    });

                    // Handle files
                    function handleFiles(files) {
                    for (let i = 0; i < files.length; i++) {
                        let file = files[i];

                        if (file.type.startsWith('image/')) {
                            let img = document.createElement('img');
                            img.src = URL.createObjectURL(file);
                            fileList.appendChild(img);
                        }
                    }
                    }
                </script>

            </div>
        </div>
    </section>
</x-app-layout>
