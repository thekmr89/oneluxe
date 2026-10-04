<?php

function adminer_object()
{
    class AdminerCustom extends Adminer
    {
        function login($login, $password)
        {
            // Allow login without requiring a password for local development
            return true;
        }

        function name()
        {
            return 'OneLuxe Database Manager';
        }

        function database()
        {
            if (isset($_GET['sqlite']) || (isset($_POST['auth']['driver']) && $_POST['auth']['driver'] === 'sqlite')) {
                return '../database/database.sqlite';
            }
            return parent::database();
        }

        function loginForm()
        {
            echo '<div style="background:#e8f4fd;padding:15px;margin-bottom:20px;border-radius:8px;border:1px solid #b6d4fe;font-size:14px;line-height:1.6;">';
            echo '<strong style="color:#084298;font-size:15px;">🚀 Quick Database Connect:</strong><br>';
            echo '<p style="margin:8px 0;">Your Laravel app is currently using <b>SQLite</b>. You do not need MySQL running!</p>';
            echo '<button type="button" id="btn-sqlite" style="background:#0d6efd;color:white;border:none;padding:10px 16px;border-radius:6px;font-weight:bold;cursor:pointer;font-size:14px;" onclick="connectSQLite()">👉 1-Click Login to Local SQLite Database</button>';
            echo '<hr style="border:none;border-top:1px solid #d0e2ff;margin:12px 0;">';
            echo '<span style="font-size:12px;color:#555;">Or manually: change <b>System</b> to <b>SQLite 3</b> and click <b>Login</b>. (If you want to use MySQL instead, you must have a MySQL server installed and running on port 3306 first).</span>';
            echo '</div>';

            echo '<script>
            function connectSQLite() {
                var driverSelect = document.querySelector("select[name=\'auth[driver]\']");
                var dbInput = document.querySelector("input[name=\'auth[db]\']");
                var serverInput = document.querySelector("input[name=\'auth[server]\']");
                var userInput = document.querySelector("input[name=\'auth[username]\']");
                var passInput = document.querySelector("input[name=\'auth[password]\']");
                
                if (driverSelect) {
                    driverSelect.value = "sqlite";
                    if (typeof loginDriver === "function") { loginDriver(driverSelect); }
                }
                if (dbInput) { dbInput.value = "../database/database.sqlite"; }
                if (serverInput) { serverInput.value = ""; }
                if (userInput) { userInput.value = ""; }
                if (passInput) { passInput.value = ""; }
                
                var form = document.querySelector("form");
                if (form) { form.submit(); }
            }

            document.addEventListener("DOMContentLoaded", function() {
                var driverSelect = document.querySelector("select[name=\'auth[driver]\']");
                var dbInput = document.querySelector("input[name=\'auth[db]\']");
                if (driverSelect && dbInput && !dbInput.value) {
                    driverSelect.value = "sqlite";
                    if (typeof loginDriver === "function") { loginDriver(driverSelect); }
                    dbInput.value = "../database/database.sqlite";
                }
            });
            </script>';

            return parent::loginForm();
        }
    }

    return new AdminerCustom();
}

include __DIR__ . '/adminer-core.php';
