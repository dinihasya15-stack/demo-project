# Introduction

API for login and simple Product CRUD.

<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>

    This API lets clients (e.g. a mobile app or Postman) log in and manage products.

    **How to use:**
    1. Call `POST /api/login` with your email and password to get a token.
    2. Send the token in every other request as a header: `Authorization: Bearer {token}`.
    3. Always send the header `Accept: application/json`.

