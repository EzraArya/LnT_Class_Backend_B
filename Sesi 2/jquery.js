$(document).ready(function () {
    // Selection
    // $("#heading-1").text("Hello World")

    // $(".red").text("This red class")

    // $("p").text("HELLO")

    // Inner HTML
    // $("#container").html("<h1>Hello World</h1>")

    // Append Item
    // const heading1 = $("<h1></h1>").text("Hello")
    // $("#container").append(heading1)

    // Onclick Event
    $("#inputBtn").click(function (e) { 
        e.preventDefault();
        const inputValue = $("#inputTask").val()

        if (inputValue == "") {
            alert("Please input value")
            return
        }

        const listItem = $("<li></li>").text(inputValue)
        $("#taskList").append(listItem)

        $("#inputTask").val("")
    });

    $("#heading-1").hover(function () {
            // over
            $(this).css("color", "blue")
        }, function () {
            // out
            $(this).css("color", "red")
        }
    );
});