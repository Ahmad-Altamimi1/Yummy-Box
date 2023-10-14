<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        .draggable {
            width: 100px;
            height: 50px;
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin: 5px;
            cursor: pointer;
        }

        .container {
            width: 300px;
            height: 300px;
            border: 2px dashed #333;
        }

        .delete-button {
            background-color: red;
            color: white;
            border: none;
            padding: 5px;
            border-radius: 50%;
            cursor: pointer;
            position: absolute;
            top: 5px;
            right: 5px;
        }
    </style>
</head>
<body>
    <div class="draggable" id="item1">
        Item 1
        <button class="delete-button">X</button>
    </div>
    <div class="draggable" id="item2">
        Item 2
        <button class="delete-button">X</button>
    </div>
    <div class="container" id="dropzone"></div>
    <script>
        $(function() {
            // Initialize the draggable behavior
            $(".draggable").draggable({
                revert: function(valid) {
                    if (!valid) {
                        return true; // Return to original position if not dropped in the container
                    }
                },
                start: function(event, ui) {
                    $(this).data("original-position", ui.helper.position());
                }
            });

            // Initialize the droppable behavior for the container
            $("#dropzone").droppable({
                accept: ".draggable",
                drop: function(event, ui) {
                    ui.helper.appendTo($(this));
                }
            });

            // Allow removing items from the container and return them to their original location
            $("#dropzone").on("click", ".delete-button", function() {
                var item = $(this).closest(".draggable");
                item.css(item.data("original-position")); // Reset the item's position
                item.appendTo(item.data("original-container"));
            });

            // Store the original container for each draggable item
            $(".draggable").each(function() {
                $(this).data("original-container", $(this).parent());
            });
        });
    </script>
</body>
</html>
