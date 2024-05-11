<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="/icon180.png">
    <link rel="icon" type="image/png" sizes="196x196" href="/icon196.png">
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@300;400;500;700;800&family=Noto+Sans+Gurmukhi:wght@300;400;500;700;800&family=Noto+Serif+Devanagari:wght@300;400;500;700;800&family=Noto+Serif+Gurmukhi:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;300;400;500;700;800&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">

    <!-- scripts -->
    <script src="/js/green-audio-player.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/green-audio-player.min.css">
</head>
<body class="antialiased scrollbar scrollbar-thin d-scrollbar scrollbar-track-transparent fira-sans body-bg">
    <!-- Navigation Header -->
    <header class="sticky top-0 z-10 nav-light h-24 md:h-12 nav-border shadow-lg">
        <div class="flex flex-col md:flex-row max-w-[98%] md:max-w-[87%] mx-auto px-2 md:px-6 lg:px-8 h-full">
            <div class="flex justify-between items-center w-full">
                <a href="/">
                    <svg class="w-auto h-6" viewBox="0 0 404 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_501_9)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M214.464 54.8734C213.056 57.6894 211.072 60.0894 208.512 62.0734C205.76 64.1214 203.008 65.1454 200.256 65.1454C194.624 65.1454 191.808 62.5534 191.808 57.3694C191.808 55.5134 192.224 53.3694 193.056 50.9374C194.144 47.8014 196.192 43.7054 199.2 38.6494C201.888 34.2334 203.232 31.7374 203.232 31.1614C203.232 30.9694 203.168 30.8414 203.04 30.7774C202.208 30.2654 199.84 31.5134 195.936 34.5214C191.584 37.8494 188.16 41.5614 185.664 45.6574C181.76 52.0574 178.656 58.1374 176.352 63.8974C176.153 64.4265 175.912 64.7163 175.629 64.767C175.363 64.8145 175.06 64.6526 174.72 64.2814C174.039 63.5146 173.584 62.606 173.356 61.5557C170.297 64.0005 167.263 65.1651 164.256 65.0494C161.824 64.9854 159.776 64.0094 158.112 62.1214C157.061 60.9291 156.342 59.5008 155.955 57.8363C154.796 59.4467 153.371 60.8911 151.68 62.1694C148.864 64.2814 146.112 65.3374 143.424 65.3374C137.728 65.3374 134.88 62.7134 134.88 57.4654C134.88 55.5454 135.296 53.4014 136.128 51.0334C137.152 47.8974 139.2 43.7694 142.272 38.6494C144.896 34.2334 146.208 31.7374 146.208 31.1614C146.208 30.9054 146.144 30.7454 146.016 30.6814C145.376 30.4254 143.904 31.0334 141.6 32.5054C138.848 34.2974 136.096 36.6974 133.344 39.7054C129.504 43.8654 124.832 51.9934 119.328 64.0894C118.88 65.1134 118.272 65.2414 117.504 64.4734C116.777 63.7458 116.267 62.8578 115.974 61.8094C115.784 61.9637 115.59 62.1157 115.392 62.2654C112.64 64.4414 109.984 65.4654 107.424 65.3374C102.176 65.0174 99.5519 62.3934 99.5519 57.4654C95.6479 62.4574 91.6479 64.9534 87.5519 64.9534C85.0559 64.9534 83.1199 64.0894 81.7439 62.3614C81.0312 61.4663 80.503 60.4252 80.1594 59.2381C79.192 60.612 77.9922 61.8291 76.5599 62.8894C74.0959 64.7134 71.5839 65.5614 69.0239 65.4334C66.4639 65.3054 64.4639 64.4254 63.0239 62.7934C61.5839 61.1614 60.8639 59.0654 60.8639 56.5054C60.8639 51.0014 64.9919 43.5134 73.2479 34.0414C69.5359 36.4734 65.7919 37.6894 62.0159 37.6894L53.9519 51.5134C50.3039 58.1054 48.0959 63.1934 47.3279 66.7774C47.1996 67.3545 46.9991 67.6826 46.7263 67.7618C46.4545 67.8407 46.1111 67.6726 45.6959 67.2574C44.2879 65.7854 43.5839 63.9614 43.5839 61.7854C43.5839 59.7374 44.2079 57.5134 45.4559 55.1134C46.7039 52.7134 50.7839 46.5854 57.6959 36.7294C56.4799 35.9614 55.8719 34.7774 55.8719 33.1774C55.8719 30.9374 56.8959 28.4414 58.9439 25.6894C60.9919 23.1294 62.7199 21.8174 64.1279 21.7534C64.5162 21.734 64.8456 21.8088 65.1161 21.9779C65.7373 22.3661 66.0479 23.2513 66.0479 24.6334C66.0479 26.8094 65.3439 29.6894 63.9359 33.2734C66.8159 32.8894 70.1119 31.4174 73.8239 28.8574C74.9759 28.0894 75.8399 28.0254 76.4159 28.6654C78.1439 30.6494 79.0079 32.6654 79.0079 34.7134C79.0079 35.9934 78.5919 37.1134 77.7599 38.0734C71.9359 44.6654 68.4159 49.9774 67.1999 54.0094C66.7519 55.4814 66.5279 56.8574 66.5279 58.1374C66.5279 61.2094 67.5519 62.7774 69.5999 62.8414C71.3919 62.9054 73.3759 61.6894 75.5519 59.1934C77.1089 57.335 78.5674 55.0824 79.9274 52.4357C80.5104 48.75 82.1239 44.9866 84.7679 41.1454C88.4159 35.8334 92.1599 31.8014 95.9999 29.0494C99.2639 26.6814 102.24 25.4974 104.928 25.4974C106.912 25.4974 108.416 26.1534 109.44 27.4654C110.464 28.7774 110.912 30.4254 110.784 32.4094C112.192 29.7854 113.344 27.8334 114.24 26.5534C114.752 25.8494 115.232 25.4974 115.68 25.4974C116.384 25.4974 116.96 26.2314 117.408 27.6994C117.728 28.7844 117.888 29.7739 117.888 30.6679C117.888 32.6469 117.408 34.6259 116.448 36.6049C114.144 40.4349 111.072 45.9564 107.232 53.1694C106.08 55.7864 105.504 57.9249 105.504 59.5849C105.504 60.7374 105.786 61.5434 106.35 62.003C106.755 62.3327 107.305 62.4841 108 62.4574C109.856 62.3304 112.032 60.9009 114.528 58.1689C115.053 57.5866 115.568 56.9711 116.074 56.3224C116.2 55.767 116.357 55.188 116.544 54.5854C117.504 51.6414 119.552 47.2894 122.688 41.5294C125.696 35.9614 128.768 30.8734 131.904 26.2654C132.263 25.7429 132.614 25.487 132.957 25.4977C133.286 25.508 133.607 25.7639 133.92 26.2654C134.624 27.4814 134.976 28.9214 134.976 30.5854C134.976 32.0574 134.72 33.6574 134.208 35.3854C136.64 32.7614 139.136 30.5534 141.696 28.7614C144.576 26.7134 146.752 25.7854 148.224 25.9774C149.44 26.1704 150.512 26.8924 151.44 28.1434C152.368 29.3944 152.832 30.8539 152.832 32.5219C152.832 33.7419 152.544 34.9614 151.968 36.1804C149.728 39.9664 146.752 45.4209 143.04 52.5439C142.016 54.8539 141.504 56.8749 141.504 58.6069C141.504 60.2925 141.905 61.4259 142.706 62.0072C143.185 62.3553 143.809 62.5053 144.576 62.4574C147.867 62.2736 151.738 58.2317 156.189 50.3318C156.489 49.1565 156.906 47.9504 157.44 46.7134C159.552 41.6574 162.944 34.8414 167.616 26.2654C164.672 26.2654 162.592 25.4334 161.376 23.7694C161.056 23.3214 160.896 22.9374 160.896 22.6174C160.896 22.4717 160.929 22.3466 160.994 22.2419C161.187 21.9324 161.667 21.8015 162.432 21.8494C164.544 21.9774 167.2 21.8494 170.4 21.4654C173.664 15.7054 176.096 11.7374 177.696 9.56139C178.144 8.98539 178.592 8.69739 179.04 8.69739C179.424 8.69739 179.744 8.98539 180 9.56139C180.448 10.7134 180.672 11.8974 180.672 13.1134C180.672 15.1614 180.032 17.5934 178.752 20.4094C180.032 20.3454 181.392 20.6814 182.832 21.4174C184.272 22.1534 184.992 23.0974 184.992 24.2494C184.992 24.8254 184.512 25.1134 183.552 25.1134C181.696 24.8574 179.2 24.9854 176.064 25.4974C173.12 30.5534 170.976 34.3294 169.632 36.8254C166.944 41.6254 164.8 45.7854 163.2 49.3054C161.984 52.0574 161.376 54.5854 161.376 56.8894C161.376 60.4734 162.624 62.3294 165.12 62.4574C167.168 62.5214 169.472 61.1454 172.032 58.3294C172.583 57.7342 173.121 57.1026 173.647 56.4347C173.826 55.7011 174.055 54.9247 174.336 54.1054C176 49.3694 180.64 40.5374 188.256 27.6094C195.744 14.8734 201.472 6.00939 205.44 1.01739C205.888 0.505391 206.304 0.24939 206.688 0.24939C207.84 0.24939 208.416 1.68939 208.416 4.56939C208.416 7.64139 207.296 11.0334 205.056 14.7454C204.416 15.7694 200.576 21.7854 193.536 32.7934C198.464 27.9934 202.304 25.7534 205.056 26.0734C206.272 26.2014 207.36 26.8734 208.32 28.0894C209.28 29.3054 209.76 30.7454 209.76 32.4094C209.76 33.6894 209.44 34.9374 208.8 36.1534C206.56 39.8654 203.584 45.2734 199.872 52.3774C198.848 54.6814 198.336 56.6974 198.336 58.4254C198.336 60.0675 198.73 61.1842 199.518 61.7753C200.02 62.1518 200.682 62.3152 201.504 62.2654C203.36 62.2014 205.504 60.7294 207.936 57.8494C210.176 55.3534 212.096 52.4094 213.696 49.0174C213.888 48.5694 214.176 48.3454 214.56 48.3454C214.944 48.3454 215.232 48.5374 215.424 48.9214C216.064 50.2654 215.744 52.2494 214.464 54.8734ZM347.52 62.0734C348.636 61.2084 349.643 60.2644 350.54 59.2413C351.133 63.1134 353.615 65.0494 357.984 65.0494C360.736 65.0494 363.456 64.1214 366.144 62.2654C367.089 61.6128 367.955 60.8929 368.742 60.1057C368.803 61.823 369.313 63.3429 370.272 64.6654C370.54 65.053 370.794 65.2385 371.035 65.222C371.311 65.2031 371.569 64.9185 371.808 64.3684C373.024 61.4714 373.952 59.2984 374.592 57.8494C376.448 62.3934 379.808 64.6654 384.672 64.6654C390.688 64.6654 396.032 59.4814 400.704 49.1134C403.008 43.9294 404.16 39.2254 404.16 35.0014C404.16 29.0494 401.92 26.0734 397.44 26.0734C394.944 26.0734 392.192 27.4174 389.184 30.1054C393.024 23.4494 395.872 18.5854 397.728 15.5134C399.968 11.3534 401.088 7.86539 401.088 5.04939C401.088 4.21739 400.928 3.28939 400.608 2.26539C400.224 0.92139 399.712 0.24939 399.072 0.24939C398.688 0.24939 398.272 0.570391 397.824 1.21239C394.56 5.83439 389.392 14.7891 382.32 28.0766C377.631 36.8863 374.216 43.6644 372.073 48.4107C371.856 48.4737 371.64 48.7079 371.424 49.1134C369.888 52.5444 368 55.4989 365.76 57.9769C363.264 60.6449 360.992 62.0424 358.944 62.1694C358.274 62.1951 357.739 62.05 357.338 61.7339C356.745 61.2652 356.448 60.4209 356.448 59.2009C356.448 57.6059 356.96 55.5634 357.984 53.0734C361.312 46.3084 364 41.1384 366.048 37.5634C367.008 35.5214 367.488 33.5429 367.488 31.6279C367.488 30.7339 367.328 29.7764 367.008 28.7554C366.56 27.3514 365.984 26.6494 365.28 26.6494C364.832 26.6494 364.352 27.0014 363.84 27.7054C361.92 30.3934 359.712 34.0414 357.216 38.6494C354.592 43.5774 352.704 47.7054 351.552 51.0334C351.485 51.2325 351.422 51.4295 351.362 51.6246C350.062 53.9412 348.589 56.0161 346.944 57.8494C344.512 60.7294 342.368 62.2014 340.512 62.2654C339.69 62.3152 339.028 62.1518 338.526 61.7753C337.738 61.1842 337.344 60.0675 337.344 58.4254C337.344 56.6974 337.856 54.6814 338.88 52.3774C342.592 45.2734 345.568 39.8654 347.808 36.1534C348.448 34.9374 348.768 33.6894 348.768 32.4094C348.768 30.7454 348.288 29.3054 347.328 28.0894C346.368 26.8734 345.28 26.2014 344.064 26.0734C341.312 25.7534 337.472 27.9934 332.544 32.7934C339.584 21.7854 343.424 15.7694 344.064 14.7454C346.304 11.0334 347.424 7.64139 347.424 4.56939C347.424 1.68939 346.848 0.24939 345.696 0.24939C345.312 0.24939 344.896 0.505391 344.448 1.01739C340.48 6.00939 334.752 14.8734 327.264 27.6094C319.648 40.5374 315.008 49.3694 313.344 54.1054C313.125 54.7448 312.937 55.3582 312.78 55.9455C312.181 56.7338 311.569 57.4749 310.944 58.1689C308.448 60.9009 306.272 62.3304 304.416 62.4574C303.721 62.4841 303.171 62.3327 302.766 62.003C302.202 61.5434 301.92 60.7374 301.92 59.5849C301.92 57.9249 302.496 55.7864 303.648 53.1694C307.488 45.9564 310.56 40.4349 312.864 36.6049C313.824 34.6259 314.304 32.6469 314.304 30.6679C314.304 29.7739 314.144 28.7844 313.824 27.6994C313.376 26.2314 312.8 25.4974 312.096 25.4974C311.648 25.4974 311.168 25.8494 310.656 26.5534C309.76 27.8334 308.608 29.7854 307.2 32.4094C307.328 30.4254 306.88 28.7774 305.856 27.4654C304.832 26.1534 303.328 25.4974 301.344 25.4974C298.656 25.4974 295.68 26.6814 292.416 29.0494C288.576 31.8014 284.832 35.8334 281.184 41.1454C277.792 46.0734 276.096 50.8734 276.096 55.5454C276.096 58.3614 276.784 60.6334 278.16 62.3614C279.536 64.0894 281.472 64.9534 283.968 64.9534C288.064 64.9534 292.064 62.4574 295.968 57.4654C295.968 62.3934 298.592 65.0174 303.84 65.3374C306.4 65.4654 309.056 64.4414 311.808 62.2654C312.016 62.1083 312.219 61.9488 312.418 61.7867C312.66 62.7398 313.097 63.5714 313.728 64.2814C314.068 64.6526 314.371 64.8145 314.637 64.767C314.92 64.7163 315.161 64.4265 315.36 63.8974C317.664 58.1374 320.768 52.0574 324.672 45.6574C327.168 41.5614 330.592 37.8494 334.944 34.5214C338.848 31.5134 341.216 30.2654 342.048 30.7774C342.176 30.8414 342.24 30.9694 342.24 31.1614C342.24 31.7374 340.896 34.2334 338.208 38.6494C335.2 43.7054 333.152 47.8014 332.064 50.9374C331.232 53.3694 330.816 55.5134 330.816 57.3694C330.816 62.5534 333.632 65.1454 339.264 65.1454C342.016 65.1454 344.768 64.1214 347.52 62.0734ZM39.5519 45.1774C39.8079 46.0094 39.9359 46.8414 39.9359 47.6734C39.9359 51.3214 38.0799 54.9374 34.3679 58.5214C31.2959 61.5294 28.3519 63.4174 25.5359 64.1854C23.0399 64.8894 20.7679 65.2414 18.7199 65.2414C15.1999 65.2414 12.1279 64.2494 9.50388 62.2654C5.27988 59.0654 3.13588 54.1374 3.07188 47.4814C3.00788 38.0734 6.62388 28.8574 13.9199 19.8334C20.2559 12.0894 26.6559 7.16139 33.1199 5.04939C35.7439 4.21739 38.0159 3.80139 39.9359 3.80139C42.6879 3.80139 45.1199 4.69739 47.2319 6.48939C50.1119 9.11339 51.5519 12.1854 51.5519 15.7054C51.5519 17.3054 51.1679 19.0014 50.3999 20.7934C49.1839 23.5454 47.9359 26.6174 46.6559 30.0094C46.3999 30.6494 46.0479 30.9694 45.5999 30.9694C45.2799 30.9694 44.9599 30.8094 44.6399 30.4894C42.6559 29.1454 41.6639 27.1614 41.6639 24.5374C41.6639 23.5774 41.8239 22.5214 42.1439 21.3694C42.3999 20.4734 43.0719 18.5854 44.1599 15.7054C45.0559 13.5294 45.5039 11.9294 45.5039 10.9054C45.5039 9.24139 44.6079 8.40939 42.8159 8.40939C39.8079 8.40939 35.8079 10.2014 30.8159 13.7854C25.2479 17.7534 20.6399 22.5214 16.9919 28.0894C12.1279 35.5774 9.69588 43.1614 9.69588 50.8414C9.69588 55.2574 10.5279 58.2654 12.1919 59.8654C13.2799 60.8894 14.6559 61.4014 16.3199 61.4014C19.2639 61.4014 22.4799 59.9454 25.9679 57.0334C29.4559 54.1214 32.3199 50.4254 34.5599 45.9454C30.6559 46.6494 27.8399 47.0974 26.1119 47.2894C21.6319 47.7374 18.5599 46.2014 16.8959 42.6814C16.6409 42.1716 16.5923 41.7887 16.7499 41.5327C16.9087 41.2745 17.2774 41.1454 17.8559 41.1454C20.4799 41.1454 24.1279 40.7294 28.7999 39.8974C33.4719 39.0654 36.7039 38.6174 38.4959 38.5534C42.8479 38.4894 45.7599 40.1214 47.2319 43.4494C47.4879 44.0254 47.5519 44.4414 47.4239 44.6974C47.2319 44.9534 46.8479 45.0494 46.2719 44.9854C44.6719 44.7934 42.4319 44.8574 39.5519 45.1774ZM232.992 50.3614C232.032 50.3614 231.136 50.4894 230.304 50.7454C229.867 50.8739 229.596 51.0694 229.489 51.332C229.33 51.7235 229.537 52.2639 230.112 52.9534C237.152 61.4014 245.024 65.6254 253.728 65.6254C259.168 65.6254 263.296 64.0254 266.112 60.8254C268.48 58.1374 269.664 55.6734 269.664 53.4334C269.664 51.5774 268.832 50.0734 267.168 48.9214C263.584 46.6814 259.968 44.4414 256.32 42.2014C251.84 39.1294 249.664 36.3134 249.792 33.7534C249.984 28.8254 253.568 23.5134 260.544 17.8174C266.944 12.5694 271.968 9.94539 275.616 9.94539C276.96 9.94539 277.632 10.5214 277.632 11.6734C277.632 12.9534 276.608 15.1614 274.56 18.2974C272 22.2654 270.56 24.6334 270.24 25.4014C269.536 27.0014 269.184 28.4734 269.184 29.8174C269.184 30.7134 269.472 31.8014 270.048 33.0814C270.688 34.5534 271.424 35.2894 272.256 35.2894C272.64 35.2894 272.992 35.0014 273.312 34.4254C275.872 29.8814 278.112 26.2814 280.032 23.6254C281.952 20.9694 282.912 18.4574 282.912 16.0894C282.912 12.5054 281.248 9.17739 277.92 6.10539C276.512 4.82539 274.752 4.18539 272.64 4.18539C270.592 4.18539 268.224 4.76139 265.536 5.91339C260.16 8.21739 255.2 11.7054 250.656 16.3774C244.96 22.2014 242.112 28.0574 242.112 33.9454C242.112 38.0414 244.864 42.1054 250.368 46.1374C254.336 48.7614 258.336 51.4174 262.368 54.1054C263.2 54.8094 263.616 55.6414 263.616 56.6014C263.616 57.4974 263.264 58.3294 262.56 59.0974C261.216 60.2494 259.232 60.8254 256.608 60.8254C252.192 60.8254 246.656 58.1374 240 52.7614C238.016 51.1614 235.68 50.3614 232.992 50.3614ZM373.632 19.5454C374.08 20.4414 374.304 21.3694 374.304 22.3294C374.304 25.2734 373.216 26.7454 371.04 26.7454C369.632 26.7454 368.48 26.0094 367.584 24.5374C366.944 23.4494 366.624 22.3294 366.624 21.1774C366.624 20.1534 366.912 19.1454 367.488 18.1534C368.064 17.1614 368.832 16.6654 369.792 16.6654C371.392 16.6654 372.672 17.6254 373.632 19.5454ZM388.992 33.8494C391.616 31.0974 393.952 29.8174 396 30.0094C397.216 30.1374 397.824 31.4494 397.824 33.9454C397.824 37.3374 396.512 41.6574 393.888 46.9054C389.408 55.8014 385.312 60.2494 381.6 60.2494C378.528 60.2494 376.832 58.0734 376.512 53.7214C380.928 44.5054 385.088 37.8814 388.992 33.8494ZM108.096 32.8894C108.096 35.7694 106.437 40.1681 103.118 46.0856C102.896 46.4801 102.668 46.8814 102.432 47.2894C98.2079 54.5854 94.5599 59.1274 91.4879 60.9154C90.4639 61.5114 89.5039 61.8014 88.6079 61.7854C87.1359 61.7214 86.3999 60.5694 86.3999 58.3294C86.3999 54.5534 87.9999 50.1054 91.1999 44.9854C93.7599 40.8254 96.6079 37.3054 99.7439 34.4254C102.688 31.6734 104.96 30.3614 106.56 30.4894L106.56 30.4894C107.52 30.6094 108.03 31.3201 108.09 32.6213C108.094 32.708 108.096 32.7974 108.096 32.8894ZM303.696 32.8894C303.696 35.9614 301.808 40.7614 298.032 47.2894C292.4 57.0174 287.792 61.8494 284.208 61.7854C282.736 61.7214 282 60.5694 282 58.3294C282 54.5534 283.6 50.1054 286.8 44.9854C289.36 40.8254 292.208 37.3054 295.344 34.4254C298.288 31.6734 300.56 30.3614 302.16 30.4894C303.184 30.6174 303.696 31.4174 303.696 32.8894Z" fill="white"/>
                        </g>
                        <defs>
                            <filter id="filter0_d_501_9" x="-0.928955" y="0.24939" width="409.089" height="75.5314" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_501_9"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_501_9" result="shape"/>
                            </filter>
                        </defs>
                    </svg>
                </a>

                <div class="flex h-12">
                    <a href="/sggs" class="px-2 md:px-6 menu-item flex items-center @if($active === 'sggs') active @endif"><span class="inline lg:hidden">S<span class="text-xs">GGS</span></span><span class="hidden lg:inline">Sri Guru Granth Sahib</span></a>
                    <a href="/nitnem" class="px-2 md:px-6 menu-item flex items-center @if($active === 'nitnem') active @endif"><span class="inline lg:hidden">N<span class="text-xs">itnem</span></span><span class="hidden lg:inline">Nitnem</span></a>
                    <a href="/hukamnama" class="px-2 md:px-6 menu-item flex items-center @if($active === 'hukamnama') active @endif"><span class="inline lg:hidden">H<span class="text-xs">ukamnama</span></span><span class="hidden lg:inline">Hukamnama</span></a>
                </div>

                <div class="hidden lg:flex h-12 justify-between items-center gap-x-2">
                    <audio id="live-player" src="https://live.sgpc.net:8443/;nocache=889869"></audio>
                    <button class="live flex justify-between items-center px-2 rounded-sm bg-white gap-x-1" onclick="liveControls();">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4 ml-1" fill="#4F5B93" viewBox="0 0 16 16">
                            <path d="M3.05 3.05a7 7 0 0 0 0 9.9.5.5 0 0 1-.707.707 8 8 0 0 1 0-11.314.5.5 0 0 1 .707.707zm2.122 2.122a4 4 0 0 0 0 5.656.5.5 0 1 1-.708.708 5 5 0 0 1 0-7.072.5.5 0 0 1 .708.708zm5.656-.708a.5.5 0 0 1 .708 0 5 5 0 0 1 0 7.072.5.5 0 1 1-.708-.708 4 4 0 0 0 0-5.656.5.5 0 0 1 0-.708zm2.122-2.12a.5.5 0 0 1 .707 0 8 8 0 0 1 0 11.313.5.5 0 0 1-.707-.707 7 7 0 0 0 0-9.9.5.5 0 0 1 0-.707zM6 8a2 2 0 1 1 2.5 1.937V15.5a.5.5 0 0 1-1 0V9.937A2 2 0 0 1 6 8z"/>
                        </svg>
                        <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="live-play-button inline h-6 w-6" fill="#4F5B93" viewBox="0 0 16 16">
                            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" class="live-pause-button hidden inline h-6 w-6" fill="#4F5B93" viewBox="0 0 16 16">
                            <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z"/>
                        </svg>
                    </span>
                    </button>
                    <form action="/search" method="GET" class="search flex h-full items-center gap-x-2">
                        <input type="text" name="q" id="q" class="rounded-sm px-1" placeholder="First letters only" required>
                        <input type="submit" value="Search" class="menu-button px-2 rounded-sm">
                    </form>
                </div>
            </div>

            <!-- Mobile -->
            <div class="flex lg:hidden w-full h-12 justify-between items-center gap-x-2">
                <audio id="live-player" src="https://live.sgpc.net:8443/;nocache=889869"></audio>
                <button class="live flex justify-between items-center px-2 rounded-sm bg-white gap-x-1" onclick="liveControls();">
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4 ml-1" fill="#4F5B93" viewBox="0 0 16 16">
                        <path d="M3.05 3.05a7 7 0 0 0 0 9.9.5.5 0 0 1-.707.707 8 8 0 0 1 0-11.314.5.5 0 0 1 .707.707zm2.122 2.122a4 4 0 0 0 0 5.656.5.5 0 1 1-.708.708 5 5 0 0 1 0-7.072.5.5 0 0 1 .708.708zm5.656-.708a.5.5 0 0 1 .708 0 5 5 0 0 1 0 7.072.5.5 0 1 1-.708-.708 4 4 0 0 0 0-5.656.5.5 0 0 1 0-.708zm2.122-2.12a.5.5 0 0 1 .707 0 8 8 0 0 1 0 11.313.5.5 0 0 1-.707-.707 7 7 0 0 0 0-9.9.5.5 0 0 1 0-.707zM6 8a2 2 0 1 1 2.5 1.937V15.5a.5.5 0 0 1-1 0V9.937A2 2 0 0 1 6 8z"/>
                    </svg>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="live-play-button inline h-6 w-6" fill="#4F5B93" viewBox="0 0 16 16">
                            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" class="live-pause-button hidden inline h-6 w-6" fill="#4F5B93" viewBox="0 0 16 16">
                            <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z"/>
                        </svg>
                    </span>
                </button>
                <form action="/search" method="GET" class="search flex h-full w-full justify-between items-center gap-x-2">
                    <input type="text" name="q" id="q" class="rounded-sm px-1 w-full" placeholder="First letters only" required>
                    <input type="submit" value="Search" class="menu-button px-2 rounded-sm" inputmode="none">
                </form>
            </div>
        </div>
    </header>

    @yield('root')

    <footer class="text-gray-200 text-xs text-center py-12">
        &copy; Copyright {{ date('Y') }}. Made with ❤️ by <a class="underline md:no-underline hover:underline" href="https://randoms.in">randoms</a>. <span class="block md:inline">All rights reserved.</span>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script>
        let playStatus = false;
        let autoPlay = false;

        @if(isset($ang))let currentAng = {{$ang}};@endif

        $(document).ready(function () {
            if(location.hash.length && $(location.hash).length) {
                const id = location.hash.split('#')[1];
                const yOffset = -100;
                const element = document.getElementById(id);
                element.classList.add('special');
                const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

                window.scrollTo({top: y, behavior: 'smooth'});
            }

            $('a.prev').on('click', function (e) {
                currentAng = currentAng === 1 ? 1 : currentAng - 1;
                fetchAngData()

                e.stopImmediatePropagation();
                e.preventDefault();
            });

            $('a.next').on('click', function (e) {
                currentAng = currentAng === 1430 ? 1430 : currentAng + 1;
                fetchAngData()

                e.stopImmediatePropagation();
                e.preventDefault();
            });

            $('input.ang').on('change', function (e) {
                const goToAng = parseInt(e.target.value);
                if (goToAng >= 1 && goToAng <= 1430) {
                    currentAng = goToAng;
                }

               $('input.ang').val(currentAng);
            });

            $('.go-button').on('click', function (e) {
                const goToAng = $('input.ang').val();
                if (goToAng >= 1 && goToAng <= 1430) {
                    currentAng = goToAng;
                }

                fetchAngData()

                e.stopImmediatePropagation();
                e.preventDefault();
            });

            document.getElementById('ang-audio').addEventListener('ended', function(){
                if (autoPlay) {
                    $('a.next')[0].click();
                }
            });
        })

        function changeSettings(id, val) {
            const status = $('#' + id).is(":checked");
            switch (id) {
                case "settings_devanagari":
                case "settings_pronunciation":
                case "settings_english":
                case "settings_shabad_arth":
                case "settings_viakhia":
                    if(status) {
                        $('.' + val).removeClass('hidden');
                    } else {
                        $('.' + val).addClass('hidden');
                    }
                    break;
                case "settings_center":
                    if(status) {
                        $('.' + val).addClass('text-center');
                    } else {
                        $('.' + val).removeClass('text-center');
                    }
                    break;
                case "settings_autoplay":
                    autoPlay = !autoPlay;
                    document.getElementById('ang-audio').play();
                    $('#audio-player > div.holder > div.play-pause-btn').attr('aria-label', "Pause");
                    $('#audio-player > div.holder > div.play-pause-btn > svg > path').attr('d', "M0 0h6v24H0zM12 0h6v24h-6z");
                    break;
            }
        }

        function liveControls() {
            if (!playStatus) {
                document.getElementById('live-player').play();
            } else {
                document.getElementById('live-player').pause();
            }

            $('.live-play-button').toggleClass('hidden');
            $('.live-pause-button').toggleClass('hidden');

            playStatus = !playStatus;
        }

        function fetchAngData() {
            console.log(`Getting data for Ang: ${currentAng}`);

            document.getElementById('ang-audio').pause();
            $('#audio-player > div.controls > div > div').attr('aria-valuenow', "0.1418643060561391");
            $('#audio-player > div.controls > div > div').attr('style', "width: 0.141864%;");
            $('#audio-player > div.holder > div.play-pause-btn').attr('aria-label', "Play");
            $('#audio-player > div.holder > div.play-pause-btn > svg > path').attr('d', "M18 12L0 24V0");

            $('#data').empty();
            $('#data').html(`<h1 class="mb-8 lg:mb-12 md:px-8 text-black text-center">Loading... Please wait</h1>`);

            $.get(`/api/ang/${currentAng}`)
                .done((data) => {
                    // Set new data
                    $('#data').empty();
                    data.forEach((datum) => {
                        $('#data').append(writeLine(datum));
                    });

                    // Update navigation area
                    $('.ang').val(currentAng);
                    const prevAng = currentAng === 1 ? 1 : currentAng - 1;
                    const nextAng = currentAng === 1430 ? 1430 : currentAng + 1;
                    $('a.prev').attr('href', `/sggs/${prevAng}`);
                    $('a.next').attr('href', `/sggs/${nextAng}`);

                    // Update audio
                    const file = `/assets/Angs/SGGS_Ang_${currentAng.toString().padStart(4, '0')} - Giani Mehnga Singh.mp3`;
                    $('audio#ang-audio').attr('src', file);

                    // Update URLs and history
                    document.title = `Ang ${currentAng} - SGGS`;
                    history.pushState("", null, `/sggs/${currentAng}`);

                    // Check settings
                    checkSettings();

                    // Scroll to top
                    $(document).scrollTop(0);
                });
        }

        function writeLine(datum) {
            return `
<div id="l_${datum['_ID']}" class="mb-8 lg:mb-12 md:px-8 text-black">
    <h1 class="gurbani gurmukhi text-md md:text-lg lg:text-xl gurmukhi-noto-serif mb-3"><span class="color-headings font-medium rounded-sm px-2 py-1">${datum['GURMUKHI_UNICODE']}</span></h1>
    <h1 class="gurbani devanagari lg:text-lg devanagari-noto-serif">${datum['DEVANAGARI_UNICODE']}</h1>
    <h1 class="gurbani pronunciation -mt-1 fira-sans text-pink-900">${datum['PRONUNCIATION_ENGLISH']}</h1>

    <p class="gurbani english lg:text-md fira-sans leading-normal text-blue-900 mt-1">${datum['ENGLISH_TRANS']}</p>
    <p class="gurbani shabad_arth gurmukhi-noto-serif text-gray-600 my-1">${datum['SHABAD_ARTH_UNICODE']}</p>
    <p class="gurbani viakhia gurmukhi-noto-serif mb-1">${datum['BHAV_ARTH_UNICODE']}</p>
</div>
`
        }

        function checkSettings() {
            const settings = ["settings_devanagari", "settings_pronunciation", "settings_english", "settings_shabad_arth", "settings_viakhia"];
            const classes = ["devanagari", "pronunciation", "english", "shabad_arth", "viakhia"];

            settings.forEach(setting => {
                const value = $('#' + setting).is(":checked");

                if (!value) {
                    $('.' + classes[settings.indexOf(setting)]).addClass('hidden');
                }
            });

            if ($('#settings_center').is(":checked")) {
                $('.gurbani').addClass('text-center');
            }

            if (autoPlay) {
                document.getElementById('ang-audio').play();
                $('#audio-player > div.holder > div.play-pause-btn').attr('aria-label', "Pause");
                $('#audio-player > div.holder > div.play-pause-btn > svg > path').attr('d', "M0 0h6v24H0zM12 0h6v24h-6z");
            }
        }
    </script>
</body>
</html>
