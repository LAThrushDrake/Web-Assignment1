
var table = document.getElementById("table");

for (var i = 0; i < table.rows.length; i++) {
    table.rows[i].onclick = function () {
        document.getElementById("type").value = this.cells[1].innerHTML;
        document.getElementById("sun").value = this.cells[2].innerHTML;
        document.getElementById("mon").value = this.cells[3].innerHTML;
        document.getElementById("tue").value = this.cells[4].innerHTML;
        document.getElementById("wed").value = this.cells[5].innerHTML;
        document.getElementById("thur").value = this.cells[6].innerHTML;
        document.getElementById("fri").value = this.cells[7].innerHTML;
        document.getElementById("sat").value = this.cells[8].innerHTML;

        document.getElementById("add").hidden = true;
        document.getElementById("update").hidden = false;
        document.getElementById("delete").hidden = false;
        document.getElementById("new").hidden = false;
    };
}

function goto() {
    location.reload();
}

function addTo() {

    var type = document.getElementById("type").value;
    var sun = document.getElementById("sun").value;
    var mon = document.getElementById("mon").value;
    var tue = document.getElementById("tue").value;
    var wed = document.getElementById("wed").value;
    var thur = document.getElementById("thur").value;
    var fri = document.getElementById("fri").value;
    var sat = document.getElementById("sat").value;

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState === 4) {
            if (request.status === 200) {
                location.reload();
            }
        }
    }
    request.open("GET", "newRow.php?type=" + type + "&sun=" + sun + "&mon=" + mon + "&tue=" + tue + "&wed=" + wed + "&thur=" + thur + "&fri=" + fri + "&sat=" + sat, true);
    request.send();

}

function update() {

    var id = document.getElementById("id").value;
    var type = document.getElementById("type").value;
    var sun = document.getElementById("sun").value;
    var mon = document.getElementById("mon").value;
    var tue = document.getElementById("tue").value;
    var wed = document.getElementById("wed").value;
    var thur = document.getElementById("thur").value;
    var fri = document.getElementById("fri").value;
    var sat = document.getElementById("sat").value;

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState === 4) {
            if (request.status === 200) {
                alert(request.responseText);
                location.reload();
            }
        }
    }
    request.open("GET", "update.php?id=" + id + "&type=" + type + "&sun=" + sun + "&mon=" + mon + "&tue=" + tue + "&wed=" + wed + "&thur=" + thur + "&fri=" + fri + "&sat=" + sat, true);
    request.send();

}

function del() {
    var id = document.getElementById("id").value;

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState === 4) {
            if (request.status === 200) {
                alert(request.responseText);
                location.reload();
            }
        }
    }
    request.open("GET", "delete.php?id=" + id, true);
    request.send();
}


