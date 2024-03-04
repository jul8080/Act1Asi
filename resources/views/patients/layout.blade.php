<!DOCTYPE html>
<html lang="en">

<head>
    <title>Patients Records</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <main style="height: 100vh; display: flex; gap: 10px;">
        <div style="background-color: #475569; width: 350px; height: 100%; padding: 150px 30px 0px 30px;">
            <x-sidebar/>
        </div>
        @yield('content')
    </main>
</body>

</html>