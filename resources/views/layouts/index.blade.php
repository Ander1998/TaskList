<!DOCTYPE html>
<html>

<head>
    <title>Task List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center pt-2">
            <div class="col-6 bg-light border">
                <nav class=" navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <a class=" navbar-brand" href="/">Tasks Ander</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarScroll">
                            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 170px;">
                                <li class="nav-item"><a href="/viewAddTask" class="nav-link">Add a new task</a></li>
                                <li class="nav-item"><a href="/" class="nav-link">Tasks List</a></li>
                                <li class="nav-item"><a href="/showSearchTask" class="nav-link">Search for a task</a></li>
                                <li class="nav-item"><a href="/searchUser" class="nav-link">Search tasks by user</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <br>
        @yield('addBlock')
</body>

</html>