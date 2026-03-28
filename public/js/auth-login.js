/**
 * Login sayfası — Vite olmadan doğrudan yüklenir (public/js).
 * resources/js/pages/login.js ile aynı mantık; burada ES module yok.
 */
class LoginPage {
    constructor() {
        this.load();
    }

    load() {
        this.events();
        alert('login js ok');
    }

    events() {}
}

new LoginPage();
