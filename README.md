<h1>CGP Systems Test</h1>

<h3>Installation</h3>
<ul>
    <li>composer install</li>
    <li>copy .env.example and create .env file</li>
    <li>php artisan key:generate</li>
    <li>php artisan migrate:fresh --seed</li>
    <li>php artisan serve</li>
</ul>

<h3>Login</h3>
<ul>
    <li>Login: admin@admin.com</li>
    <li>Password: 1234</li>
    <li>Bearer API key: eQAlER3pkTPigk4NSUjULugw7XXpJRFLPpAoWebdcKyRJWu25ekDtV2E6kyy</li>
</ul>

<h3>API</h3>
<ul>
    <li>If you need pagination, add in the end of link - ?page=2</li>
    <li>GET /api/companies - list of companies</li>
    <li>GET /api/clients/{company_id} - list of clients by company id</li>
    <li>GET /api/client_companies/{client_id} - list of companies by client id</li>
</ul>