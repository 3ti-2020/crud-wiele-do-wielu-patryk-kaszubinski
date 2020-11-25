const todoList = document.querySelector("#todoList");
const todoForm = document.querySelector("#todoForm");
const todoSearch = document.querySelector("#todoSearch");
const todoTextarea = todoForm.querySelector('textarea');

todoList.addEventListener("click", deleteCheck)

function addTask(text) 
{
    console.log("Dodaję zadanie do listy")
}

todoForm.addEventListener("submit", e => {
    e.preventDefault();

    if (todoTextarea.value !== "") 
    {
        addTask(todoTextarea.value);
        todoTextarea.value = "";
    }
});

function addTask(text) {
    const element = document.createElement("div");
    element.classList.add("element");

    const elementInner = document.querySelector("#elementTemplate").content.cloneNode(true);

    element.append(elementInner);

    element.querySelector(".element-text").innerText = text;

    todoList.append(element);

    const deleteButton = document.createElement('button');
    deleteButton.innerHTML = 'DELETE';
    deleteButton.classList.add('delete_btn')
    element.appendChild(deleteButton);
    todoList.appendChild(element);
    todoTextarea.value = "";
};

function deleteCheck(e) {
const item = e.target;

if (item.classList[0] === "delete_btn") {
    const todo = item.parentElement;
    todo.remove()
}
};

