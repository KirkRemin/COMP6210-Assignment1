
    var note_saved_name = "";
    var note_saved_text = "";
    var container;
    var loop_counter = document.getElementById("loopcounter");
    var note_counter = 0;

function add_note(selectObject){
    
    var value = selectObject.value;

    if(value == 1 && note_counter <= 10){
         //Append a node with a random text
         container = document.getElementById("container" + note_counter);
         note_counter += 1;
         loop_counter.value = note_counter;
         loop_counter.innerHTML = note_counter;
         
         
         //Create an <input> element, set its type and name attributes
         var note_label = document.createElement("label");
         note_label.innerHTML = "Additional Note " + note_counter + ": ";
         var note_title = document.createElement("input");
         note_title.type = "text";
         note_title.name = "note_name" + note_counter;
         note_title.id = "notes_title" + note_counter;
         note_title.placeholder ="Title:";
         var note_body = document.createElement("textarea");
         note_body.name = "note_text" + note_counter;
         note_body.id = "notes_body" + note_counter;
         var note_add = document.createElement("select");
         note_add.onchange = function(){add_note(this);};
         var opt1 = document.createElement("option");
         opt1.value = "0";
         opt1.innerHTML = "No";
         var opt2 = document.createElement("option");
         opt2.value = "1";
         opt2.innerHTML = "Yes";
         container.appendChild(note_label);
         container.appendChild(document.createElement("br"));
         container.appendChild(note_title);
         container.appendChild(document.createElement("br"));
         container.appendChild(note_body);

         container.appendChild(note_add);
         note_add.appendChild(opt1);
         note_add.appendChild(opt2);
         //Append a line break 
         container.appendChild(document.createElement("br"));
         var next_container = document.createElement("div");
         next_container.id = "container" + note_counter;
         container.insertAdjacentElement("afterend",next_container);
         
    }
    else if(note_counter == 11){

    }

    else{
        note_counter = note_counter -1;
        container = document.getElementById("container" + note_counter);
        //Clear previous contents of the container
        while (container.hasChildNodes()) {
            container.removeChild(container.lastElementChild);
            }
        document.getElementById("Create_Form").removeChild(document.getElementById("container" + (note_counter+1)));
        container = document.getElementById("container" + note_counter);
    }
}