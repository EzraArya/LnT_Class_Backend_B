// // Reference Body
// const body = document.body

// // Membuat h1 dari js
// const heading = document.createElement("h1")
// heading.textContent = "Hello World"

// body.append(heading)

const inputTask = document.getElementsByClassName("input")
// const taskList = document.getElementById("taskList")

function addTask() {
    const inputValue = inputTask.value

    // Handle bila input user kosong
    if (inputValue == "") {
        alert("Please input value")
        return
    }

    // Membuat List Item
    // const listItem = document.createElement("li")

    //Style HTML lewat JS
    listItem.style.fontSize = "20px"
    listItem.style.color = "blue"

    listItem.textContent = inputValue
    taskList.append(listItem)

    inputTask.value = ""
}