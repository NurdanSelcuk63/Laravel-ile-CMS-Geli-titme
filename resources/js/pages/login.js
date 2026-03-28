import axios from 'axios';
import Swal from 'sweetalert2';
export class Login {
    constructor() {
        this.load();
    }

    load() {
        const form = document.querySelector('form[action*="login"]');
        if (!form) {
            return;
        }
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            this.submitLogin();
        });
    }

    async submitLogin() {
        const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

        const payload = {
            email: document.getElementById('email')?.value ?? '',
            password: document.getElementById('password')?.value ?? '',
            remember: document.getElementById('remember')?.checked ?? false,
        };

        try {
            const { data } = await axios.post('/api/login', payload, {
                headers: {
                    'X-CSRF-TOKEN': token ?? '',
                    Accept: 'application/json',
                },
            });

            if (data && data.status === true) {
                await Swal.fire({
                    icon: 'success',
                    title: 'Giriş başarılı',
                    text: data.message ?? '',
                });
                window.location.href = '/dashboard';
                return;
            }

            await Swal.fire({
                icon: 'error',
                title: 'Giriş başarısız',
                text: data?.message ?? 'Bilinmeyen hata',
            });
        } catch (err) {
            const msg =
                err.response?.data?.message ??
                (err.response?.data?.errors
                    ? Object.values(err.response.data.errors).flat().join(' ')
                    : err.message);

            await Swal.fire({
                icon: 'error',
                title: 'Giriş başarısız',
                text: msg,
            });
        }
    }
}

new Login();
