// NAVIGATION SHOW/HIDE

$("nav ul").hide();

$(".nav-toggle").click( function() {
  $("nav ul").slideToggle("medium");
});

$("nav ul li a, .brand a").click( function() {
  $("nav ul").hide();
});


// SMOOTH SCROLLING WITH NAV HEIGHT OFFSET

$(function() {
  var navHeight = $("nav").outerHeight();
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - navHeight
        }, 1000);
        return false;
      }
    }
  });
});



// MAKE THE SPLASH CONTAINER VERTICALLY CENTERED

function centerSplash() {
  var navHeight = $("nav").outerHeight();
  var splashHeight = $(".splash .container").height();
  var remainingHeight = $(window).height() - splashHeight - navHeight;
  $(".splash .container").css({"padding-top" : remainingHeight/2, "padding-bottom" : remainingHeight/2});
}

$( document ).ready( function() {
  centerSplash();
});

$( window ).resize( function() {
  centerSplash();
});
document.addEventListener("DOMContentLoaded", function () {
    // event listener for the "Add Task" button
    document.getElementById("addPlannerTaskButton").addEventListener("click", addTask);

    // event listener for the whole planner list to delegate events
    document.getElementById("plannerList").addEventListener("click", function (event) {
        // Check if the clicked element is an edit or delete button
        if (event.target.classList.contains("edit-task-button")) {
            editTask(event.target.closest("li"));
        } else if (event.target.classList.contains("delete-task-button")) {
            deleteTask(event.target.closest("li"));
        } else if (event.target.classList.contains("task-checkbox")) {
            markTaskAsCompleted(event.target);
        }
    });
});

function addTask() {
    let newPlannerTaskInput = document.getElementById("newPlannerTask");
    let plannerList = document.getElementById("plannerList");

    // Check if the input field is not empty
    if (newPlannerTaskInput && newPlannerTaskInput.value.trim() !== "") {
        // Create a new list item
        let newPlannerTaskItem = document.createElement("li");
        newPlannerTaskItem.innerHTML = `
            <input type="checkbox" class="task-checkbox">
            <span contenteditable="true">${newPlannerTaskInput.value}</span>
            <button type="button" class="edit-task-button" style="display:none;">Edit</button>
            <button type="button" class="delete-task-button" style="display:none;">Delete</button>
        `;

        // Append the new task to the planner list
        if (plannerList) {
            plannerList.appendChild(newPlannerTaskItem);
        }

        // Show edit and delete buttons
        let buttons = newPlannerTaskItem.querySelectorAll(".edit-task-button, .delete-task-button");
        buttons.forEach(function (button) {
            button.style.display = "inline-block";
        });

        // Clear the input field
        if (newPlannerTaskInput) {
            newPlannerTaskInput.value = "";
        }
    }
}

function editTask(taskItem) {
    // Get the task text
    let taskText = taskItem.querySelector("span").textContent;

    // Prompt the user for a new task text
    let newTaskText = prompt("Edit Task:", taskText);

    // Update the task text if the user provided a new one
    if (newTaskText !== null) {
        taskItem.querySelector("span").textContent = newTaskText;
    }
}

function deleteTask(taskItem) {
    // Remove the task item from the list
    taskItem.remove();
}

function markTaskAsCompleted(checkbox) {
    // Similar to the previous markTaskAsCompleted function
}
function markTaskAsCompleted(checkbox) {
    // Similar to the previous markTaskAsCompleted function
}


document.addEventListener("DOMContentLoaded", function () {
    let budgetAmount = 0;
    let expenses = [];

    // Add event listener for the "Set Budget" button
    document.getElementById("setBudgetButton").addEventListener("click", setBudget);

    // Add event listener for the "Add Expense" button
    document.getElementById("addExpenseButton").addEventListener("click", addExpense);

    // Add event listener for the "Refresh" button
    document.getElementById("refreshButton").addEventListener("click", refreshBudgetTracker);

    // Add event listener for the "Create New" button
    document.getElementById("createNewButton").addEventListener("click", createNewBudget);

    function setBudget() {
        budgetAmount = parseFloat(document.getElementById("budgetAmount").value) || 0;
        updateRemainingBudget();
    }

    function addExpense() {
        let expenseName = document.getElementById("expenseName").value;
        let expenseAmount = parseFloat(document.getElementById("expenseAmount").value) || 0;

        if (expenseName && expenseAmount > 0) {
            expenses.push({ name: expenseName, amount: expenseAmount });
            updateExpenseList();
            updateRemainingBudget();

            // Clear input fields
            document.getElementById("expenseName").value = "";
            document.getElementById("expenseAmount").value = "";
        }
    }

    function updateExpenseList() {
        let expenseList = document.getElementById("expenseList");

        // Clear existing items
        expenseList.innerHTML = "";

        // Add new items
        expenses.forEach((expense) => {
            let listItem = document.createElement("li");
            listItem.innerHTML = `
                <span>${expense.name}</span>
                <span>₱${expense.amount.toFixed(2)}</span>
            `;
            expenseList.appendChild(listItem);
        });
    }

    function updateRemainingBudget() {
        let remainingBudget = document.getElementById("remainingBudget");
        let totalExpenses = expenses.reduce((total, expense) => total + expense.amount, 0);
        let remainingAmount = budgetAmount - totalExpenses;

        remainingBudget.textContent =
            remainingAmount >= 0 ? `Remaining Budget: ₱${remainingAmount.toFixed(2)}` : "Over budget!";
        remainingBudget.style.color = remainingAmount >= 0 ? "#fff" : "#f00";
    }

    function refreshBudgetTracker() {
        // Clear the budget and expenses
        budgetAmount = 0;
        expenses = [];
        updateExpenseList();
        updateRemainingBudget();

        // Clear input fields
        document.getElementById("budgetAmount").value = "";
        document.getElementById("expenseName").value = "";
        document.getElementById("expenseAmount").value = "";
    }

    function createNewBudget() {
        // Reset to initial state
        refreshBudgetTracker();
    }
})