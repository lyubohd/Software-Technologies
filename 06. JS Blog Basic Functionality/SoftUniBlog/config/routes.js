const userController = require('./../controllers/user');
const homeController = require('./../controllers/home');
const articleConstroller = require('./../controllers/article');

module.exports = (app) => {
    app.get('/', homeController.index);

    // Register
    app.get('/user/register', userController.registerGet);
    app.post('/user/register', userController.registerPost);

    // Loggin
    app.get('/user/login', userController.loginGet);
    app.post('/user/login', userController.loginPost);

    app.get('/user/details', userController.details);

    app.get('/user/logout', userController.logout);

    // Article
    app.get('/article/create', articleConstroller.createGet);
    app.post('/article/create', articleConstroller.createPost);

    app.get('/article/details/:id', articleConstroller.details);

};

