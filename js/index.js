document.addEventListener("DOMContentLoaded", function () {
    const currentDate = new Date();
    const currentMonth = currentDate.getMonth();
    const currentYear = currentDate.getFullYear();

    const monthNames = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];

    document.getElementById("current-month").innerText = `${monthNames[currentMonth]} ${currentYear}`;

    // Function to generate calendar days (you can customize this further)
    function generateCalendarDays() {
        const daysContainer = document.getElementById("calendar-days");
        daysContainer.innerHTML = "";

        // Get the total days in the current month
        const totalDays = new Date(currentYear, currentMonth + 1, 0).getDate();

        for (let day = 1; day <= totalDays; day++) {
            const li = document.createElement("li");
            li.innerText = day;
            daysContainer.appendChild(li);
        }
    }

    generateCalendarDays(); // Call the function to populate days

});


