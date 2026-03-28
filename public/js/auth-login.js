/**
 * Vite kapalıyken: axios + Swal global (layout'ta yüklenir).
 */
(function () {
    const form = document.querySelector('form[action*="login"]');
    if (!form || typeof axios === 'undefined' || typeof Swal === 'undefined') {
        return;
    }

    form.addEventListener('submit', async function (e) {
        e.preventDefault();

        const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
        const payload = {
            email: document.getElementById('email')?.value ?? '',
            password: document.getElementById('password')?.value ?? '',
            remember: document.getElementById('remember')?.checked ?? false,
        };

        try {
            const res = await axios.post('/api/login', payload, {
                headers: {
                    'X-CSRF-TOKEN': token ?? '',
                    Accept: 'application/json',
                },
            });
            const data = res.data;

            if (data && data.status === true) {
                await Swal.fire({
                    icon: 'success',
                    title: 'Giriş başarılı',
                    text: data.message ?? '',
                });
                window.location.href = '/';
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
    });
})();
