<?php
include "config.php";
include "header.php";
include "navbar.php";
?>

<!-- Container 1 -->
<div id="MainContainer" class="d-flex flex-row">

    <!-- Box container -->
    <div id="boxFormContainer">

        <h4 style="text-align: center; font-size: 24px; font-weight: bold;">Add the boxes you use to ship below</h4>

        <!-- Form to add boxes -->
        <form method="post">

            <div class="form-row">
                <fieldset class="form-group col-md" style="padding-left: 15px; padding-right: 15px;">
                    <label for="boxName">Box Description</label>
                    <input type="text" class="form-control" id="boxName" name="boxName" placeholder="e.g. large package"
                           required>
                </fieldset>
            </div>

            <div class="form-row">

                <fieldset class="form-group col-md-4" style="padding-left: 15px;">
                    <label for="OuterWidth">Outer Width</label>
                    <input type="text" class="form-control" id="outerWidth" name="outerWidth" placeholder="e.g. 7 in."
                           required>
                </fieldset>

                <fieldset class="form-group col-md-4">
                    <label for="OuterLength">Outer Length</label>
                    <input type="text" class="form-control" id="outerLength" name="outerLength" placeholder="e.g. 7 in."
                           required>
                </fieldset>

                <fieldset class="form-group col-md-4" style="padding-right: 15px;">
                    <label for="OuterDepth">Outer Depth</label>
                    <input type="text" class="form-control" id="outerDepth" name="outerDepth" placeholder="e.g. 6.75 in."
                           required>
                </fieldset>

            </div>

            <div class="form-row">

                <fieldset class="form-group col-md-4" style="padding-left: 15px;">
                    <label for="InnerWidth">Inner Width</label>
                    <input type="text" class="form-control" id="innerWidth" name="innerWidth" placeholder="e.g. 7 in."
                           required>
                </fieldset>

                <fieldset class="form-group col-md-4">
                    <label for="InnerLength">Inner Length</label>
                    <input type="text" class="form-control" id="innerLength" name="innerLength" placeholder="e.g. 6.75 in."
                           required>
                </fieldset>

                <fieldset class="form-group col-md-4" style="padding-right: 15px;">
                    <label for="innerDepth">Inner Depth</label>
                    <input type="text" class="form-control" id="innerDepth" name="innerDepth" placeholder="e.g. 6.75 in."
                           required>
                </fieldset>

            </div>

            <div class="form-row">
                <fieldset class="form-group col-md-6" style="padding-left: 15px;">
                    <label for="EmptyWeight">Empty Weight</label>
                    <input type="text" class="form-control" id="emptyWeight" name="emptyWeight" placeholder="e.g. 5 oz."
                           required>
                </fieldset>

                <fieldset class="form-group col-md-6" style="padding-right: 15px;">
                    <label for="maxWeight">Max Weight</label>
                    <input type="text" class="form-control" id="maxWeight" name="maxWeight" placeholder="e.g. 5 lbs."
                           required>
                </fieldset>
            </div>

            <div class="form-row" style="justify-content: left; padding-left: 15px; padding-bottom: 15px;">
                <button type="submit" id="submitNewBox" class="btn-lg btn-primary">Add Box</button>
            </div>

        </form>

    </div>

    <!-- Form to add items to be shipped -->
    <div id="itemFormContainer">

        <h4 style="text-align: center; font-size: 24px; font-weight: bold;">Add Items to be cartonized</h4>

        <form id="itemForm" method="post">

            <div class="form-row">
                <fieldset class="form-group col-md" style="padding-left: 15px; padding-right: 15px;">
                    <label for="itemName">Item Name</label>
                    <input type="text" class="form-control" id="itemName" name="itemName" placeholder="e.g. running shoes"
                           required>
                </fieldset>
            </div>

            <div class="form-row">
                <fieldset class="form-group col-md-6" style="padding-left: 15px;">
                    <label for="itemWidth">Item Width</label>
                    <input type="text" class="form-control" id="itemWidth" name="itemWidth" placeholder="e.g. 6 in."
                           required>
                </fieldset>

                <fieldset class="form-group col-md-6" style="padding-right: 15px;">
                    <label for="itemLength">Item Length</label>
                    <input type="text" class="form-control" id="itemLength" name="itemLength" placeholder="e.g. 7 in."
                           required>
                </fieldset>
            </div>

            <div class="form-row">
                <fieldset class="form-group col-md-6" style="padding-left: 15px;">
                    <label for="itemDepth">Item Depth</label>
                    <input type="text" class="form-control" id="itemDepth" name="itemDepth" placeholder="e.g. 7 in."
                           required>
                </fieldset>

                <fieldset class="form-group col-md-6" style="padding-right: 15px;">
                    <label for="itemWeight">Item Weight</label>
                    <input type="text" class="form-control" id="itemWeight" name="itemWeight" placeholder="e.g. 2 lbs."
                           required>
                </fieldset>
            </div>

            <div class="form-row">

            </div>

            <div class="form-row" style="justify-content: left; padding-left: 15px; padding-bottom: 15px;">
                <button type="submit" id="submitNewItem" class="btn-lg btn-primary">Add Item</button>
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

    <!-- SWAL2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

    <!-- Custom JS -->
    <script type="text/javascript" src="/assets/js/app.js"></script>

    <script type="text/javascript">
        Swal.fire({
                title: "Attention!",
                icon: "warning",
                text: "This section is currently in development."
            });
    </script>

    </body>
    </html>
