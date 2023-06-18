Blockly.Blocks['void_main'] = {
    init: function () {
        this.appendDummyInput()
            .appendField("void main()");
        this.appendStatementInput("BODY")
            .setCheck(null);
        this.setColour(230);
        this.setTooltip("");
        this.setHelpUrl("");
    }
};

Blockly.Java['void_main'] = function (workspace) {
    var statements_body = Blockly.Java.workspaceToCode(workspace, 'BODY');
    var code = '\npublic static void main(String[] args) {\n' +
        statements_body + '\n}';
    return code;
};
