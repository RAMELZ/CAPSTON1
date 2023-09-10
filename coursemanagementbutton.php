<!DOCTYPE html>
<html>
<head>
    <title>Course Management</title>
    <style>
        /* Add your CSS styling here */
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            margin: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Course Management</h1>
    <div>
        <button class="button" id="registrationButton">Course Registration</button>
        <button class="button" id="schedulesButton">Class Schedules</button>
        <button class="button" id="gradesButton">Grades</button>
        <button class="button" id="materialsButton">Course Materials</button>
    </div>

    <div id="content">
        <!-- Content will be loaded here using JavaScript -->
    </div>

    <script>
        // JavaScript to handle button clicks and load content
        const registrationButton = document.getElementById('registrationButton');
        const schedulesButton = document.getElementById('schedulesButton');
        const gradesButton = document.getElementById('gradesButton');
        const materialsButton = document.getElementById('materialsButton');
        const content = document.getElementById('content');

        registrationButton.addEventListener('click', () => {
            content.innerHTML = '<h2>Course Registration</h2><p>Here you can register for courses.</p>';
        });

        schedulesButton.addEventListener('click', () => {
            content.innerHTML = '<h2>Class Schedules</h2><p>View your class schedules here.</p>';
        });

        gradesButton.addEventListener('click', () => {
            content.innerHTML = '<h2>Grades</h2><p>Check your grades for each course.</p>';
        });

        materialsButton.addEventListener('click', () => {
            content.innerHTML = '<h2>Course Materials</h2><p>Access course materials and resources.</p>';
        });
    </script>
</body>
</html>