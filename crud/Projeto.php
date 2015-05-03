<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link rel="stylesheet" type="text/css" href="css/easyui.css">
        <link rel="stylesheet" type="text/css" href="css/icon.css">
        <link rel="stylesheet" type="text/css" href="css/demo.css">
        <style type="text/css">
            #fm{
                margin:0;
                padding:10px 30px;
            }
            .ftitle{
                font-size:14px;
                font-weight:bold;
                color:#666;
                padding:5px 0;
                margin-bottom:10px;
                border-bottom:1px solid #ccc;
            }
            .fitem{
                margin-bottom:5px;
            }
            .fitem label{
                display:inline-block;
                width:80px;
            }
        </style>

        <script type="text/javascript" src="js/jquery.easyui.min.js"></script>
        <script type="text/javascript">
            var url;
            function newUser() {
                $('#dlg2').dialog('open').dialog('setTitle', 'Nova Fase');
                $('#fm').form('clear');
                url = 'crud/salvarProjeto.php';
            }
            function editUser() {
                var row = $('#dg2').datagrid('getSelected');
                var d1 = $('#dg2').datagrid('getSelected');
                if (row) {
                    $('#dlg2').dialog('open').dialog('setTitle', 'Editar Fase');
                    $('#fm').form('load', row);
                    url = 'crud/atualizarFase.php?descricaoFase=' + row.descricaoFase + '&d1=' + d1.descricaoFase;
                }
            }
            function saveUser() {
                $('#fm').form('submit', {
                    url: url,
                    onSubmit: function () {

                        return $(this).form('validate');
                    },
                    success: function (result) {
                        var result = eval('(' + result + ')');
                        if (result.success) {
                            $('#dlg2').dialog('close');		// close the dialog
                            $('#dg2').datagrid('reload');	// reload the user data
                        } else {
                            $.messager.show({
                                title: 'Erro',
                                msg: result.msg
                            });
                        }
                    }
                });
            }
            function removeUser() {
                var row = $('#dg2').datagrid('getSelected');
                if (row) {
                    $.messager.confirm('Confirm', 'Tem certeza que deseja remover esta fase?', function (r) {
                        if (r) {
                            $.post('crud/removerFase.php', {descricaoFase: row.descricaoFase}, function (result) {
                                if (result.success) {
                                    $('#dg2').datagrid('reload');	// reload the user data
                                } else {
                                    $.messager.show({// show error message
                                        title: 'Error',
                                        msg: result.msg
                                    });
                                }
                            }, 'json');
                        }
                    });
                }
            }
        </script>
    </head>
    <body>


        <table id="dg2" title="Fases" class="easyui-datagrid" style="width:900px;height:250px"
               url="crud/pegarProjeto.php"
               toolbar="#toolbar2" pagination="true"
               rownumbers="true" fitColumns="true" singleSelect="true">
            <thead>
                <tr>
                    <th field="descricaoFase" width="50">Descrição da Fase</th>

                </tr>
            </thead>
        </table>


        <div id="toolbar2">
            <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()" title="Adicionar ">Nova Fase</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()" title="Alterar Medico">Editar Fase</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="removeUser()" title="Remover Cirurgia">Remover Fase</a>
        </div>

        <div id="dlg2" class="easyui-dialog" style="width:400px;height:400px;padding:10px 20px"
             closed="true" buttons="#dlg2-buttons">
            <div class="ftitle">Dados da Fase</div>
            <form id="fm" method="post" novalidate>
                <div class="fitem">
                    <label>Descrição da Fase</label>
                    <input type="text" class="form-control" name="descricaoFase"  required="true">
                </div>

            </form>
        </div>
        <div id="dlg2-buttons">
            <a href="enviarEmail.php" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveUser()">Salvar</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg2').dialog('close')">Fechar</a>
        </div>
    </body>
</html>