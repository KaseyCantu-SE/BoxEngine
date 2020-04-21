<?php include "config.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <title>BoxEngine</title>

    <link rel="shortcut icon" href="/assets/images/se-logo.png" type="image/x-icon"/>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- SWAL2 theme -->
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

</head>
<body>

<?php include "navbar.php"; ?>

    <!-- TestBox UI -->
    <div id="testUIContainer" class="container">
        <h2 id="testBoxHeader"><strong>Shipping Boxes to test with</strong></h2>

        <table id="testBoxesTable" class="table table-hover table-dark">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">X-Small Box</th>
                <th scope="col">Small Box</th>
                <th scope="col">Medium Box</th>
                <th scope="col">Large Box</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Width: 150 mm.</td>
                <td>Width: 300 mm.</td>
                <td>Width: 1000 mm.</td>
                <td>Width: 3000 mm.</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Length: 150 mm.</td>
                <td>Length: 300 mm.</td>
                <td>Length: 1000 mm.</td>
                <td>Length: 3000 mm.</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Depth: 4 in.</td>
                <td>Depth: 8 in.</td>
                <td>Depth: 35 in.</td>
                <td>Depth: 80 in.</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Max Weight: 100 g.</td>
                <td>Max Weight: 1000 g.</td>
                <td>Max Weight: 5000 g.</td>
                <td>Max Weight: 10,000 g.</td>
            </tr>
            </tbody>
        </table>
    </div>

    <!-- Select Items -->
    <div id="selectTestItems" class="container">
        <form id="selectForm" style="font-weight: bold;" action="">
            <div class="form-row">
                <div class="form-check form-check-inline">
                    <input name="Item1" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <div class="itemDecisionSpacing">
                        <p><strong>Item 1</strong></p>
                        <ul>
                            <li>Width: 25 mm.</li>
                            <li>Length: 25 mm.</li>
                            <li>Depth: 4 in.</li>
                            <li>Weight: 200 g.</li>
                            <li>Keep Flat? - True</li>
                        </ul>
                    </div>
                </div>
                <div class="form-check form-check-inline">
                    <input name="Item2" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <div class="itemDecisionSpacing">
                        <p><strong>Item 2</strong></p>
                        <ul>
                            <li>Width: 135 mm.</li>
                            <li>Length: 135 mm.</li>
                            <li>Depth: 5 in.</li>
                            <li>Weight: 100 g.</li>
                            <li>Keep Flat? - True</li>
                        </ul>
                    </div>
                </div>
                <div class="form-check form-check-inline">
                    <input name="Item3" class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                    <div class="itemDecisionSpacing">
                        <p><strong>Item 3</strong></p>
                        <ul>
                            <li>Width: 255 mm.</li>
                            <li>Length: 255 mm.</li>
                            <li>Depth: 10 in.</li>
                            <li>Weight: 200 g.</li>
                            <li>Keep Flat? - True</li>
                        </ul>
                    </div>
                </div>
                <div class="form-check form-check-inline">
                    <input name="Item4" class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                    <div class="itemDecisionSpacing">
                        <p><strong>Item 4</strong></p>
                        <ul>
                            <li>Width: 100 mm.</li>
                            <li>Length: 100 mm.</li>
                            <li>Depth: 4 in.</li>
                            <li>Weight: 60 g.</li>
                            <li>Keep Flat? - False</li>
                        </ul>
                    </div>
                </div>
                <div id="testButtonContainer">
                    <button id="testCartonizeBtn" type="submit" class="btn-primary btn-lg" href="/selectTestItems.html">
                        Cartonize
                    </button>
                </div>
            </div>
        </form>

    </div>

    <img id="moonMode" src="/assets/images/colorMoon.png" alt="">


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<!-- SWAL -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- SWAL2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

<!-- Custom JS -->
<script type="text/javascript" src="/assets/js/app.js"></script>

<script type="text/javascript">
    Swal.fire({
        title: "Getting Started!",
        text: "Select any combination of items to be packed, to see the recommended box to ship them in.",
        icon: "info"
    })
</script>

</body>
</html>