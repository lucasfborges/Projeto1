Ext.ns('App');

//Ext.Loader.setConfig({enabled: true, disableCaching : true });
//Ext.Loader.setPath('Sch', '../../../ExtScheduler3.x/js/Sch');
//Ext.Loader.setPath('Gnt', '../../js/Gnt');

Ext.require([
    'Gnt.panel.Gantt',
    'Gnt.column.PercentDone',
    'Gnt.column.StartDate',
    'Gnt.column.EndDate',
    'Sch.plugin.TreeCellEditing'
]);

Ext.onReady(function () {
    App.Gantt.init();
});

App.Gantt = {

    // Initialize application
    init : function (serverCfg) {
        var preset = Sch.preset.Manager.get('weekAndDayLetter');

        preset.timeColumnWidth = 130;

        delete preset.headerConfig.bottom;

        var taskStore = Ext.create("Gnt.data.TaskStore", {
            model : 'Gnt.model.Task',
            proxy : {
                type   : 'ajax',
                method : 'GET',
                url    : 'tasks.xml',
                reader : {
                    type   : 'xml',
                    // records will have a 'Task' tag
                    record : ">Task",
                    rootProperty   : "Tasks"
                }
            }
        });

        var dependencyStore = Ext.create("Gnt.data.DependencyStore", {
            allowedDependencyTypes  : [ 'EndToStart' ],
            autoLoad : true,
            proxy    : {
                type   : 'ajax',
                url    : 'dependencies.xml',
                method : 'GET',
                reader : {
                    type   : 'xml',
                    rootProperty   : 'Links',
                    record : 'Link' // records will have a 'Link' tag
                }
            }
        });

        var g = Ext.create('Gnt.panel.Gantt', {
            height            : ExampleDefaults.height,
            width             : ExampleDefaults.width,
            renderTo          : 'example-container',
//            leftLabelField    : 'Name',
            highlightWeekends : true,
            loadMask          : true,
            rowHeight         : 30,
            resizeConfig             : {
                showDuration : false
            },

            plugins     : 'gantt_taskeditor',

            viewConfig  : {
                trackOver : false
            },

            enableProgressBarResize  : true,
            enableDependencyDragDrop : true,
            //snapToIncrement : true,
            startDate                : new Date(2010, 0, 11),
            endDate                  : Sch.util.Date.add(new Date(2010, 0, 4), Sch.util.Date.WEEK, 10),
            viewPreset               : 'weekAndDayLetter',
            eventBorderWidth         : 0,

            eventRenderer : function (taskRecord) {
                return {
                    ctcls : "Id-" + taskRecord.get('Id') // Add a CSS class to the task container element
                };
            },

            tooltipTpl : new Ext.XTemplate(
                '<ul class="taskTip">',
                    '<li><strong>Task:</strong>{Name}</li>',
                    '<li><strong>Start:</strong>{[values._record.getDisplayStartDate("y-m-d")]}</li>',
                    '<li><strong>Duration:</strong> {Duration}d</li>',
                    '<li><strong>Progress:</strong>{PercentDone}%</li>',
                '</ul>'
            ).compile(),


            // Setup your static columns
            columns    : [
                {
                    xtype     : 'namecolumn',
                    width     : 200
                }
            ],

            taskStore       : taskStore,
            dependencyStore : dependencyStore,

            buttons : [
                {
                    text    : 'Add new task...',
                    iconCls : 'icon-add',
                    handler : function () {
                        var newTask = new taskStore.model({
                            Name        : 'New task',
                            leaf        : true,
                            PercentDone : 0
                        });
                        taskStore.getRootNode().appendChild(newTask);
                        g.getSchedulingView().scrollEventIntoView(newTask);

                    }
                },
                {
                    enableToggle : true,
                    id           : 'demo-readonlybutton',
                    text         : 'Read only mode',
                    pressed      : false,
                    handler      : function () {
                        g.setReadOnly(this.pressed);
                    }
                }
            ],

            listeners : {

                // Setup a time header tooltip after rendering
                render : function (view) {
                    var header = view.getSchedulingView().headerCt;

                    view.tip = Ext.create('Ext.tip.ToolTip', {
                        // The overall target element.
                        target     : header.id,
                        // Each grid row causes its own separate show and hide.
                        delegate   : '.sch-simple-timeheader',
                        showDelay  : 0,
                        trackMouse : true,
                        anchor     : 'bottom',

                        //to see different date formats, see http://docs.sencha.com/ext-js/4-1/#!/api/Ext.Date
                        dateFormat : 'Y-m-d',
                        //dateFormat: 'Y-m-d, g:i a',
                        renderTo   : Ext.getBody(),
                        listeners  : {
                            // Change content dynamically depending on which element triggered the show.
                            beforeshow : function (tip) {
                                var el = Ext.get(tip.triggerElement),
                                    position = el.getXY(),
                                    date = view.getSchedulingView().getDateFromXY(position);

                                //update the tip with date
                                tip.update(Ext.Date.format(date, tip.dateFormat));
                            }
                        }
                    });
                }
            }
        });

        Ext.QuickTips.init();
    }
};
