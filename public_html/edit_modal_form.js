function edit_modal_form(id){
    //Grab Current Row Data
    var rows = document.getElementsByClassName(id);
    //Fill ID
    var label_id = document.getElementById("SCP_ID");
    label_id.innerHTML = "SCP-00" + id;
    var hidden_input = document.getElementById("SCP_hidden_ID");
    hidden_input.value = id;
    //Slect current object class
    var nodes = document.getElementById("object_select");
    for (var i = nodes.length; i--;){
        if (rows[2].innerHTML === nodes[i].value){
            nodes[i].selected = true; break;
        }
    }
    //Fill current SCP Procedures
    document.getElementById("SCP_field").value = rows[3].innerHTML;

    //Fill current Description
    document.getElementById("descriptionField").value = rows[4].innerHTML;

    //Select Current Security clean
    nodes = document.getElementById("inputGroupSelect01");
    for (var i = nodes.length; i--;){
        if (rows[5].innerHTML === nodes[i].value){
            nodes[i].selected = true; break;
        }
    }
}

