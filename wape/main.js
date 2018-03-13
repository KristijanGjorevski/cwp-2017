const electron = require("electron");
const url = require("url");
const path = requre("path");

const { app, BrowserWindow } = electron;

let mainWindow;

// Listen for app to be ready

app.on("ready", function() {
    //create new window
    mainWindow = new BrowserWindow({});

    //Load html into window
    mainWindow.loadURL(url.format({
        pathname: path.join(__dirname, "mainWindow.html"),
        protocol: "file:",
        slashes: true
    }));
    //build menu from template
    const mainMenu = Menu.buildFromTemplate(mainMenuTemplate);
    //insert menu
    Menu.setApplicationMenu(mainMenu);

});





// create menu template
const mainMenuTemplate = [{
    label: "file",
    submenu: [{
            label: "Add item"
        },
        {
            label: "Clear items"
        },
        {
            label: "Quit",
            click() {
                app.quit();
            }
        }
    ]
}];