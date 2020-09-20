function update() {

    var idoc = document.getElementById('iframe').contentWindow.document;

    idoc.open();
    idoc.write(editor.getValue()); // Systems Calls
    idoc.close();

}

function setupEditor() {
    window.editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setMode("ace/mode/html");
    editor.setValue(
`<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
<body>
    <h1>Heading</h1>
    <p>Paragraph</p>
</body>
</html>
                    `,
  1
);

    editor.getSession().on('change', function () {
        update();
    });

    editor.focus();
    editor.setOption({
        fontFamily: "Monaco",
        fontSize: "16pt",
        ShowLineNumber: false,
        ShowGutter: false,          
        vScrollBarAlwaysVisibale: true, 
        enableBasicAutocompletion: false, 
        enableLiveAutocompletion: false,  
    });

    editor.setShowPrintMargin(false);
    editor.setBehavioursEnabled(false); 


}

function ready() {

    setupEditor();
    update();

}