const option = document.getElementById('option');
const report = document.getElementById('report');


// First Report
function report1() {
    option.innerHTML = `
    <h2>Employee details across the world belonging to a particular department.</h2>
    <form>
    <select name="department" onchange="SQL1(this.value)">
        <option value="">Department:</option>
        <option value="Manufacturing">Manufacturing</option>
        <option value="Accounts">Accounts</option>
        <option value="Marketing">Marketing</option>
        <option value="Finance">Finance</option>
        <option value="Human Resource">Human Resource</option>
    </select>
</form>    
    `
    report.innerHTML = "";
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


// Second Report
function report2() {
    option.innerHTML = `
    <h2>Employees who joined after a specific year.</h2>
    <input type="date" onchange="SQL2(this.value)" id="start" name="trip-start"
       value="2018-07-22"
       min="2000-01-01" max="2020-01-01">
    `
    report.innerHTML = "";
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


// Third Report
function report3() {
    option.innerHTML = `
    <h2>Employees with monthly salary more than 10000 per month.</h2>

    <input type="number" onchange="SQL3(this.value)" id="quantity" name="quantity" min="1000" max="100000" >
    `
    report.innerHTML = "";
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

// Fourth Report
function report4() {
    option.innerHTML = `
    <h2>All employees belonging to a particular designation.</h2>

    <form>
    <select name="Designation" onchange="SQL4(this.value)">
        <option value="">Designation:</option>
        <option value="Technical Manager">Technical Manager</option>
        <option value="Data Analyst">Data Analyst</option>
        <option value="President of Sales">President of Sales</option>
        <option value="IT Manager">IT Manager</option>
        <option value="Software Development Manager">Software Development Manager</option>
        <option value="Web Designer">Web Designer</option>
        <option value="Project Manager">Project Manager</option>
    </select>
    `
    report.innerHTML = "";
}

function SQL4(str) {
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
        xmlhttp.open("GET", "reports/report4.php?q=" + str, true);
        xmlhttp.send();
    }
}

// Fifth Report
function report5() {
    option.innerHTML = `
    <h2>All employees belonging to a particular country.</h2>

    <form>
    <select name="Region" onchange="SQL5(this.value)">
        <option value="">Region:</option>
        <option value="Technical Manager">Technical Manager</option>
        <option value="Data Analyst">Data Analyst</option>
        <option value="President of Sales">President of Sales</option>
        <option value="IT Manager">IT Manager</option>
        <option value="Software Development Manager">Software Development Manager</option>
        <option value="Web Designer">Web Designer</option>
        <option value="Project Manager">Project Manager</option>
    </select>
    `
    report.innerHTML = "";
}

function SQL5(str) {
    if (str == "") {
        document.getElementById("report").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 5 && this.status == 200) {
                document.getElementById("report").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "reports/report5.php?q=" + str, true);
        xmlhttp.send();
    }
}


// Eighth Report
function report8() {
    option.innerHTML = `
    <h2>Total number of employees having salary account group by bank.</h2>
    
</form>    
    `

    report.innerHTML = "";
    SQL8();
}

function SQL8() {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("report").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "reports/report8.php", true);
    xmlhttp.send();

}
// Ninth Report
function report9() {
    option.innerHTML = `
    <h2>Total number of technical managers available in a department.</h2>
    <form>
    <select name="department" onchange="SQL9(this.value)">
        <option value="">Department:</option>
        <option value="Manufacturing">Manufacturing</option>
        <option value="Accounts">Accounts</option>
        <option value="Marketing">Marketing</option>
        <option value="Finance">Finance</option>
        <option value="Human Resource">Human Resource</option>
    </select>
</form>    
    `
    report.innerHTML = "";
}

function SQL9(str) {
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
        xmlhttp.open("GET", "reports/report9.php?q=" + str, true);
        xmlhttp.send();
    }
}

// Tenth Report
function report10() {

    console.log('report10');
    option.innerHTML = `
    <h2>A report on department-wise total monthly expenditure against salary only.</h2>
    <form>
    <select name="department" onchange="SQL10(this.value)">
        <option value="">Department:</option>
        <option value="Manufacturing">Manufacturing</option>
        <option value="Accounts">Accounts</option>
        <option value="Marketing">Marketing</option>
        <option value="Finance">Finance</option>
        <option value="Human Resource">Human Resource</option>
    </select>
</form>    
    `
    report.innerHTML = "";
}

function SQL10(str) {
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
        xmlhttp.open("GET", "reports/report_10.php?q=" + str, true);
        xmlhttp.send();
    }
}