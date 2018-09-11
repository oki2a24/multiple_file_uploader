const makeImage = (elFile, file) => {
    const elImage = document.createElement('img');
    elFile.appendChild(elImage);

    const reader = new FileReader();
    reader.addEventListener('load', (e) => {
        elImage.src = e.target.result;
    });
    reader.readAsDataURL(file);
};

const removeSelf = (origin) => {
    const liobj = origin.parentNode;
    liobj.parentNode.removeChild(liobj);
};

const createFileList = (upload_files) => {
    const flist = document.getElementById('file_list');
    flist.innerHTML = '';
    let fileElmForDel;
    upload_files.forEach((file, index) => {
        const elFile = document.createElement('li');
        elFile.className = "fileElement";
        const file_data = `${file.name}  ${Math.floor(file.size / 1024)}KB`;
        elFile.appendChild(document.createTextNode(file_data));

        const delete_tag = document.createElement('a');
        delete_tag.appendChild(document.createTextNode("delete"));
        delete_tag.className = "delAnc"
        delete_tag.href = "#"
        elFile.appendChild(delete_tag);
        
        
        
        if (file.type.indexOf('image/') === 0) {
            makeImage(elFile, file);
        }
        flist.appendChild(elFile);

        delete_tag.addEventListener('click', (e) => {
            e.preventDefault();
            const liobj = this.parentNode;
            liobj.parentNode.removeChild(liobj);
            //flist.removeChild(fileElmForDel[index]);
            console.log(index);
            //console.log(document.getElementsByClassName("fileElement")[i]);
        });
    });
    fileElmForDel = document.getElementsByClassName("fileElement");
};


$('#drag_drop_area').on({
    'dragover': (e) => {
        e.preventDefault();
        e.originalEvent.dataTransfer.dropEffect = 'copy';
        $('#drag_drop_area').css('background-color', '#cff');
    },
    'dragleave': (e) => {
        e.stopPropagation();
        e.preventDefault();
        $('#drag_drop_area').css('background-color', 'transparent');
    },
    'drop': (e) => {
        e.stopPropagation();
        e.preventDefault();
        $('#drag_drop_area').css('background-color', 'transparent');

        const upload_files = e.originalEvent.dataTransfer.files;
        createFileList(Array.from(upload_files));

        document.getElementById('fileInput').files = upload_files;
    }
});