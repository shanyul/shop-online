<?php

return [
    'alipay' => [
        'app_id'         => '2016092100559381',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsaHK3HI5cM0cs9hdYALcu6eZ22zGwk7Gysel+PHVTjgUrzZU5RJLGtYHb8QUZl6aaNbvseVmfomW2lvhPh9aWqU6be2lGLz0Wb5oe8PzA9CZkjVylWm4QsdQIJIFqIQEtC7QW2YKHcvwGhTiXWJckJcqnvrBAbm+1yT4JD0xTtkQgtoKk2Y02wSSY4dw/RGtqaqvYMK+q2OUNO5J3x5AtO2CbAC2INcGlq4tlFjH79GgQopDkgXXxY78Zpn2MudJ0GF5KP6OkofZp+Y9NLG2w5U8Q8sFuhCw7C3fTG4nDUo+k+oOFpy3wvGbyK9gECHO9o+J6wTbdXxVwS8Gh4zq5QIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEA3UzIJZ0tkxVJ5GK4qhf2sVXi1x2ItKkEeHnTnNaXsWT0RXf9ZLjd+5VfWg94WeDWru1QsiG3psTo8p0pUhF1VOpwmz3d3/WKX/gAaZTpJ0RP5m9waXRALGv0il9FdOoFd6pAdju/vPtpaZIL0nHgbhLDI8H7DpxObE9EY9x29LadtQ55g/Jv12FNr+c5SvAVbnyeSmorD9ouSfRAT3JDEDAsFyPq7YB/bX6Yivj9f0DjGV/rdvqSl+rhgurivekgDVtGjlAtrcJk+G1Mbo9HtlvytjiZDpTD/Y/km/qJi3++guaYgDJJEptYzaSo5rIoyxNgavGuQXean5fuc+s7RQIDAQABAoIBAQDCZ4Ubpew3XWhAPYlDwzFvr6dKmiNRsXi/7SW8jbdMmwcLT9FF/jDjpeDR2O0854swuEE/euc+lZSeLPnzomqUYi7x8XNMHwOkMtUJ60q2uAgIwrTZrsoBPATi2bbGch7DdMiUFQDnH2UG3MmN4YPqrojGjM3jk+RAuZG2uCG37mFs+AsW3eCVePpZWD6TOOO7nABmx2Nru9sICnLKus2f+Nu8tMNShTHy41dxZmCa5t5fE2P3ifGAIdSxEo0VJbsWpAahcQ05FviRqfv1iIs+Dv0RGPsfPoDZDuAi64C/7UIIoidt49G6b1+UmHNMx9vSrsvUbu6nbVj2rA2R1akxAoGBAP/X++8s7/L8SoF5lTN+99PWo30ho5Q+VJM4Dzeo+tYeYa4T4MSpjyZxe3KceilmczBXL2ent2SmOddFgkNJnxPAmTiP8EFxtFPNHgb+LWva1HfmycECldkXx5wytSeittTfZKEcJSbpLdUJut4jfWp/3Jkwvej/3XUAPq4mp21jAoGBAN1vZRGzDNeEH9DzagRSpqOTi4b98mxCamFV69DLr7fQJMaFYrPUqykIJ5mX67nSFkdtN0cppQALwGvtg/N1+/bvytXjhMOwlzqFEP5m9AYyCE+JGKrwgi5T71Ym8nIiEOK2HIe1rTH2xGR2GPZMV9VQ4E6oF55h5vuKKRWfsMk3AoGBAJak2W5KensLvN8h9Q1eXJS6lIdwkD4QuYH6B1PRxuje+MskXzvNT0HmnjatFm1cKsUzAPG62oyEKBiuj/YI2ocp585bSq9uQSz64QxjC+Gu914mYXOpjwxGKT26ydotwBP1+e23gdS4hkkjsolsQkO8R+tXvOr+BasH2uB2WC1bAoGANQ6W4fnL7uvKj89zLJv9L56PxQWeC5CSWsYynbHgZaOq3CJjtwETDd7VVjkPk1OiYPTrVNLGpU8riPC9OB2iBNYJ/NvqGNV8NtphawOSHtXoJd6MmZDNMHqOE097shs1fozyIxZF7H3bKtMdQg6i0Qry5AXkut9scAL3uyWrP1sCgYEAy3THMVKEEAf0OOAeHSmHd+Mf0MbUW5skLtRWSwGpfnN6l8MtILawfFFxwQ+IicIdX+IYgYZIWi8wQnJsYPOZVCLnUgoYnp6KIJ45j3unF8KUf8+SfmwAm/2llveU9/Ek7C4l9EQ019KjeiFc0k9kUsopm0eaDT7tv9VhDyRDn6A=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];