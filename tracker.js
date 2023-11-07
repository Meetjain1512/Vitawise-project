const taskInput = document.getElementById('taskInput');
const addTaskBtn = document.getElementById('addTaskBtn');
const taskList = document.getElementById('taskList');

// Retrieve tasks from localStorage, if any
let tasks = JSON.parse(localStorage.getItem('tasks')) || [];

// Function to save tasks to localStorage
function saveTasks() {
    localStorage.setItem('tasks', JSON.stringify(tasks));
}

// Function to create a new task item
function createTaskItem(taskText) {
    const task = {
        id: Date.now(),
        text: taskText,
        completed: false
    };

    tasks.push(task);
    saveTasks();

    const li = document.createElement('li');
    li.innerHTML = `
        <input type="checkbox" data-id="${task.id}" ${task.completed ? 'checked' : ''}>
        <span class="text">${task.text}</span>
        <button class="deleteBtn" data-id="${task.id}">Delete</button>
    `;
    taskList.appendChild(li);
    taskInput.value = '';
}

// Function to render tasks from localStorage
function renderTasks() {
    taskList.innerHTML = '';
    tasks.forEach(task => {
        const li = document.createElement('li');
        li.innerHTML = `
            <input type="checkbox" data-id="${task.id}" ${task.completed ? 'checked' : ''}>
            <span class="task">${task.text}</span>
            <button class="deleteBtn" data-id="${task.id}">Delete</button>
        `;
        taskList.appendChild(li);
    });
}

// Event listener for the "Add" button
addTaskBtn.addEventListener('click', () => {
    const taskText = taskInput.value.trim();
    if (taskText !== '') {
        createTaskItem(taskText);
    }
});

// Event listener for the "Enter" key
taskInput.addEventListener('keyup', (event) => {
    if (event.key === 'Enter') {
        const taskText = taskInput.value.trim();
        if (taskText !== '') {
            createTaskItem(taskText);
        }
    }
});

// Event delegation for the "Delete" button
taskList.addEventListener('click', (event) => {
    if (event.target.classList.contains('deleteBtn')) {
        const taskId = parseInt(event.target.getAttribute('data-id'));
        tasks = tasks.filter(task => task.id !== taskId);
        saveTasks();
        renderTasks();
    }
});

// Event delegation for the checkbox
taskList.addEventListener('change', (event) => {
    if (event.target.type === 'checkbox') {
        const taskId = parseInt(event.target.getAttribute('data-id'));
        const task = tasks.find(task => task.id === taskId);
        task.completed = event.target.checked;
        saveTasks();
    }
});

// Render tasks when the page loads
renderTasks();
