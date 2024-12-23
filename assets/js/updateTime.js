// Wait's for a response from getTime.php -> returns date
function updateTime() {
          fetch('/EmployeeSystemHR/include/getTime.php')
            .then(response => response.text())
            .then(data => {
            document.getElementById('time').innerText = data;
    });
}

setInterval(updateTime, 1000);
