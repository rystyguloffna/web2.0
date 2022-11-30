function previewVideo() {
    var file = document.getElementById("file").files;
    if (file.length > 0) {
        var fileReader = new FileReader()
        fileReader.onload = function (event) {
            document.getElementById("preview").setAttribute("src", event.target.result);
        }
        
        fileReader.readAsDataURL(file[0]);
    }
    document.getElementById("preview").setAttribute("controls", "");
    
}

function addFilter(){
    let filter = document.getElementById("filter");
    console.log(filter);
    let value = filter.value;
    console.log(value);
    document.getElementById("preview").style.filter = value;
}