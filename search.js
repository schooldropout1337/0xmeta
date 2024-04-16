function loadResults() {
    var runCount = localStorage.getItem("runCount");
    var num = localStorage.getItem("num");
    var start = num * runCount;

    // Display a popup alert
    alert("Results loaded successfully!");
}
