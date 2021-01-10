const option = document.getElementById('option');
const report = document.getElementById('report');

function report1() {
    option.innerHTML = `
    <form>
    <select name="users" onchange="SQL1(this.value)">
        <option value="">Department:</option>
        <option value="Manufacturing">Manufacturing</option>
        <option value="Accounts">Accounts</option>
        <option value="Marketing">Marketing</option>
        <option value="Finance">Finance</option>
        <option value="Human Resource">Human Resource</option>
    </select>
</form>    
    `
}

function SQL1(str) {
    if (str == "") {
        document.getElementById("report").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("report").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "reports/report1.php?q=" + str, true);
        xmlhttp.send();
    }
}

function report2() {
    option.innerHTML = `
    <h2>Employees who joined after a specific year.</h2>
    <input type="date" onchange="SQL2(this.value)" id="start" name="trip-start"
       value="2018-07-22"
       min="2000-01-01" max="2020-01-01">
    `
}

function SQL2(str) {
    if (str == "") {
        document.getElementById("report").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("report").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "reports/report2.php?q=" + str, true);
        xmlhttp.send();
    }
}

function report3() {
    console.log('hello')
    option.innerHTML = `
    <h2>Employees with monthly salary more than 10000 per month.</h2>

    <input type="number" onchange="SQL3(this.value)" id="quantity" name="quantity" min="1000" max="100000" >
    `
}

function SQL3(salary) {
    if (salary == "") {
        document.getElementById("report").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("report").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "reports/report3.php?q=" + salary, true);
        xmlhttp.send();
    }
}