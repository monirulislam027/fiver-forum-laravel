class AppStorage {

    setToken(token) {
        localStorage.setItem('token', token);
    }

    setUser(user) {
        localStorage.setItem('user', user);
    }

    store(user, token) {
        this.setUser(user);
        this.setToken(token);
    }

    getToken() {
        localStorage.getItem('token');
    }

    getUser() {
        localStorage.getItem('user');
    }


    clear() {
        localStorage.clear('token')
        localStorage.clear('user')
    }


}

export default AppStorage = new AppStorage();
