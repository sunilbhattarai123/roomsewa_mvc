
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f5f5f5;
        }

        .sign-in-form-section {
            padding: 50px 0;
        }

        .container {
            width: 70%;
            margin: 0 auto;
        }

        .sign-up {
            text-align: center;
        }

        h3 {
            font-weight: bold;
        }

        hr {
            border: 1px solid #ccc;
        }

        p {
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            width: 200px;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            color: #fff;
            background-color:  #5cb85c;
            border: 1px solid  #5cb85c;
            border-radius: 5px;
            margin-right: 10px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn:hover {
            background-color: #4cae4c;
            transform: scale(1.05);
        }
    </style>


    <section class="container-fluid sign-in-form-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 sign-up">
                    <h3 style="font-weight: bold;">How do you want to Login?</h3><hr>
                    <p>If you want to sign in as a tenant click on tenant login button otherwise click on owner login button.</p><br><br>
                    <button type="submit" class="btn btn-info"  onclick="window.location.href='/login/tenant'">Tenant Login</button>
                    <button type="submit" class="btn btn-info"  onclick="window.location.href='/login/owner'">Owner Login</button>
                </div>
            </div>
        </div>
    </section>
 