



<div class="container mt-2 menu-midd">
    <div class="row">
        <div class="col-xl-4  d-flex align-items-center justify-content-center">
        <a href="index.php"> <img src="img/logo.png" alt=""></a>
        </div>
        <div class="col-xl-4  d-flex align-items-center justify-content-center ">
            <i class="bi bi-search next" style="color: 
                #BDBDBD;"></i>
            <input class="menu-search " type="search" placeholder="Найти" aria-label="Search">

        </div>

        <div class="col-xl-4  d-flex align-items-center justify-content-center">


            <i class="bi bi-telephone-fill m-2"></i>

            <a href="tel:+75552281337" class="callTell px-3"> 8(555) 228-13-37</a>

         <?php if ( isset ($_SESSION['logged_user']) ) : ?>
              
                    <a class="nav-link nav-dark" href="profile.php">  <svg width="48" height="48" viewBox="0 0 48 48" class="my-3" fill="none" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="48" height="48" fill="url(#pattern0)" />
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0" transform="scale(0.00195312)" />
                    </pattern>
                    <image id="image0" width="512" height="512"
                        xlink:href="data:image/png;base64,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" />
                </defs>
            </svg>
</a>
            

                <?php else : ?>

            
                    <a class="" href="auth.php">    <svg width="48" height="48" viewBox="0 0 48 48" class="my-3" fill="none" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="48" height="48" fill="url(#pattern0)" />
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0" transform="scale(0.00195312)" />
                    </pattern>
                    <image id="image0" width="512" height="512"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAMAAADDpiTIAAADAFBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACzMPSIAAAA/3RSTlMAFS5FVmh5i5yuu8rM293s7v3w4NrDraGOe2dSPysYAgcoTnCMpsL3+qWJbTALHElylrrf/OGVbkchAQVeiLPo8qJvPAkpX8/70J9lCoG477Z9QQwGPn/B+ceDdvX0cS0ISJTmmUoUsfOsXRITv2oRxGYOT6/2qlEqzsZiMZs0VYTidyOR+Cwy/jhLuURNRsu+siSAD2TUGqeoHgTxPdKY5IJzOSIDM0JXkKPJ3g3cFhk6WnqaENXn12w35Xy3eEDRHxtjq2CdJb1U03XZL7xMUFjtdOp+wNiKhuupHReToLXjOyekhekg1p6HU1trJo2PlzXIWWnFsDa0YUOSXM1yNUL9AAApzklEQVR42u2deUDU1fbAx6VURGRcc2VcwQpXTBlABa1QSUxRMTGp0CxU1NTcLcScDFcsTdwq0HJPU6tXmWZmmetTM82epmm2Wdl7We/3mh8IyjZw7r3fc+79znA/f+uc5X75fu899ywWi0aj0Wg0Go1Go9FoNBqNRqPRaDQajUaj0Wg0Go1Go9FoNBqNRqPRaDQajUaj0Wg0Go1Go9FoNBqNRqPRaDQajUaj0Wg0Go1Go9FoNBqNRqPRaDQaDSFlypYrf9vtFSpW8qrsXcWnqq/VmUM13+o1vGt61ap9R5269eo3aOinWlENKrZGjZs0bdbcx9/JSED1mi3uvKvx3YGqNdcYpGWr1m3atgtiXfgitPe6p0PHYLtqMzT8hDQIDevUWXjlC9DFOzyiazfVFmlYsd97X5v7I3HWPt9noXuPng305sDsRJV7oFc09trnEd37wT59VduoKYaYfv0HxNIt/k0iBz5UP0a1rZrCNBjUNo5+8W8yuPfDQ/TW0DTEP/JoO3mLf5PHEobGq7ZcY7EM6/m4xD/9ggx/4slE1faXbkb0bIu+3ecjaOSoMqq9UFpJCu0UoHb1c5+B0WPGqvZF6SPkqXGmWP0cxk942qbaI6WKiWGdVa95Yaol3K3aK6WFpIhJqlfbNZOn6CARPVOnKdv0w3RJmK7aP55NzAwv1WsM4R0aotpLHkvDZzqrXl4Wnk3WwQEKZqaMV720rMwKf061tzyO2eHiaR0KcHR6XrXHPAn7nAGqV5SfF/qpdpvHkFpZ9WKKMXquvjFEYN5A1QspzvxWqr3n9nRdoHoRjTG5vmoPujXT3Xz5s1k4RLUX3ZaWCVbj/lePdcIi1Z50S/qmMRdymJ2AlMWqvel2hHSoqnrZMOn8os4o56L+S6qXDJtJOizAzpKlqpeLAMfLy1T71U1Ij1iuerFoiEvTF4UMrFipeqHomKTTBSDGrnIQLkDA6vmdKr7y6pgZHV9rkLEkKSkp02IJTErKyGi0Zs3a10c9+Ma63us3UB4+gt7YqNrD5qbVszQLv6ntqkEz1mxmU2LLm1u3veVVhabM7NnGqn1sYrYn4P/J+XQKC10jVtu9ZG5y+A78WNSEEar9bFbq7UR1tPXt8HfejTeq1Mbnx9xzP24uwj/0FZErFjdD9PHgtu+tRazW2DgvzWs4nnaOt/ROoAgrqmO5d/j7H7xJcN7KnHpXpS5YOm7Ql4QFCXkG6S37UoW1hMX7IbvCPsTR01pB9xjIx6L1GE71X3jbbnpd93y0txqGtuszVHvdPHyM8H2N2/u6tA+rbe46hGBltfKq/W4Suu0z7MvBzepFyVU6/umlgw2rnaBbj2XxSXeDbrTuv0/Jpjrq01pGY0WfTVTtffXUM/hBfXubwku2zQc+N6b98Bmq/a+Y9DBDof/YCamqM6/XJBgqVnWkpKteA5VsrmnEee1uZwzu05LUwVD2ygulODJ80Ejw59Bh02RZ2Tu2NWDIhoOq9VfFEfHTX2SLqaq1L8jBcPENYdxR1dqrIUL4om14ioSADy8N046J2uNIU72TUUB8C1F3RaclqVbeNRv/eVzUptqlLjBcRrTiz/fEdtW6F0/fbaJvgZOlrKlEhuD5+dh7Jm/JtzhNMEj8RakqH5otlvrhf8qkL//8JH4ptrc9/ZpqzeUxT+he3VrbTRLrN7cRutuOKzWJQk8K9fjs5UbH5SGHRCyMLSXHwQMi0d8qc1SrzceRTSLvuFGq1ZZBssjbMS1etdq8hESI3HKFqVabnjABt5z5SrXWIpytLWBqioeHhOxv8PtkU6pqrUUpt4Hf2lUe/QTYv+Z2iDXBjTswdwvjPw9UNM0dFz6Z/+J2R3c3L6eczp/vNM1jnwA/7vWfVcftC6pDbucuNt3noU+Anbvyb6UbHf2L517u8QY9PPMJ4N3/WSvYVKuMg60C78X3NE/cCX7J6YTqu6g08cs43OGhaY9P9vHNIsBZrf1no8+1+PLFtcFk6Xlrz3Man0KliTr6c7qgGcm1X9Su21tMKrbtfECNFk2+ISkwGFGL0/w6tKshnwN89o8fg69C4lNNBzLcQkR2f3QOwUPwImcdiYdFhbfyxf8/R9/9fTWGZ8igv1cyesnGhR1cLnBMkbMycpjHd/93ETn2s2zbfP4LqEkRyEnnY8dxyY+cK299qJnNdf8fgPv2y0ydIDheNsgrFLV4z76NKy442M1jYHkEc+X/nO6DKXv3t4+JrX6uMg+gTgbedYlH+HEPyRIb9gWP1fdfRhQdnDLLyPJnMyu8EaJCX3E1QvjODTLgYLpx5f9eRHzpNmiB0nbEuhdxSxr/Mo/okR6QLW7nyf93bMMTHHwGrcOb9coePH98zyN5nfuHBLdxmDtrK5rYKNxpA3FheB3/e/LsSfurWDNMjnD8Gfqitc6yh/4Dc/mz6TwF7Y8xlSNZzOHmDQQmcpRJbLgXS2qjydjLn40X2vb0ufbsUoe79RDSzRz135POIgm1jzHevcclccmZSCru4UgTqeLGR4EQjv4PNbE+spcJJ43VxDqZJ3EcjXphPXbyuYPdyv1Y0d/7SKdNLP8BSc1AL3ahp1Stn1HqsQfgzyAdeNNFss65SEDStNs5dpluuhFcxL7ZnYb0liszknr9nc7KSHvBmCeYRVabqW4VxYlnT4XDyoR+Df3w54rjb+Jom3mFWeSH7thRkr3/J1YG3I+GA/9sjD+Co6/fW8wiH1W2jMJ8zGwcVhb0KGmDZoN+wtHYL5xZ5KfqVlKMmcwpAFg50CJFp8Kk4CidyXw11OVnhYspQAjztWcLHFeKFB0aIQHnsxXDfBao7F4lMs+w2tUW51RlN95xnJOvcZ6AbsxhqwdUricvXVkv4gcG4gi8Knv9nc5fcDSPas4oL/J5ZcvJzXbWK4APkVq+8RYdoNAUyVms9wI1kP5YJMA6/2tTQxx576hYf6dzEI72e1jLhn5Vt6J8NGY0qCrSzvZHaee/glifxtG/QTSjwMPq1pSHRMYk4FkrcOQ9Lyn+U5Txv+FY0JExR2ine7QTZYxuOJ7EEXd2tar1dzr/0RLHho8Y5V1Rt6rstGI0BinbLWa0uvXPOp0jBelZM0XnqVtXVsYyzv++iHQB8KvK9Xc62+BYYWcMCfpIHo4mwCo2SyrH44i7T2zd4q6tOvD7NzM3J/nFJGUMeX5GnXWVBYdXHcGxI96bTRzS2ZOOFWxJIJeQOv9dFsj/ia7074ku8g/sZZssFHgIqiJtA3ZXZRIXZPKCwfSVTGYEICWA+3Hn/1VdtauE5JPMfm9F8/7iSKTLrHls0dPu5p4y1prNaXchiYvgWytH27nglUp8+XOcYYUPkIxhLKFpQrd6xmnI9g5dhySu0XgmcbnEJjAWHjzHV1M4Hilhy76XSdzyLRQrhwTbXnYH0lbWzlP/EdSDI5dvUUWe8q33kby3ka2HSA/0ZUNjLZMBcQ2QxIVyLNJ+zrKjg//h+HGsrN0GTBUtDtOOFon5jsldPZHE9WVPAT02hjvqYA9lb+awE6uopSeTOG+z9pFswqT+BCxx3zIvUC2h6awj/mAWcAeWTROYxBG0UMNg+2kW5X2w/lqCWeu/x0cISrBHsE4DjQ1GMmoE01vtNF6tOiZ3suge+S6WuDOMi9POQHnt9XaMQqZhWZXKdAb9EkscJpeZ/iKfwRJ3L+NpfbKhouNExoNG0AUsu66yiPM34wgVplYw3dGa3jB2ntlrMyamL+Nc8GZYdtnuZxG3D0scHtNZLgFi0dotfcIWq7louOgwZimTICtaH4eJLG/SIKyjNB5MUXm8HlBsdXUYRUd+bE8A3t9kHRZxndDEIcEUA1qP1upgN1Pv2Uoo8mKYvgL+w7BsC/mQRV4/LHFIDGDQOXIqmjim4QPrkULOUUw7Qby3228sn7f/oIlDoSOLi/CmIqaz9H/dJBT+cUUZltPgebzarV9YvLkWTRwGLC1vquMVNjzNIM5/Np55v7FEhF5HExflwyBuNJ55xpnD8sgiZrX3ZhD3EaaBLHkOXnji1rIcqUz0CrDPZ9B3KZ68ZQwfSURx2RY+DksMwupzl8U6BocOQLXQECwvgC5b8OQx5M4cR23zbrGMYLjowMpzymILS3sF1L76hmA5AiQjymPIoD2KbeOLsMzJiOI+YHDpSWwbRbnOoKyPDU/eV/AXsi26kX7wWdCBOOogpgaDU81SMM4yC6cxojy4GNhKMHL0bnjjgVQufAOWgw5aaoUxLjDcyx3CFLgfFEdSQwc3IdmPKY4h/hhkjv6BDM3OIjHvLhLBhM1YpGKNgsD3T/6YhVtlGY46X1PYyctZhtsrtHyJbI6A4ojyZuG+F6i1mwxVj3FowU4DPATriZu/0BQS5yAaOj4R/NbdiSluM0OOsAkmzMZ0htW8iioRDDtj5ekXAQxATkIVx1AzvtNGZSszP8JaDkcdwRkF3gSTddV8HZJsRc3WHMFQ+fo7la3MMFyVnkAV2AcSd8xGZWt8NCQb95b+Adi3zalsZWUqrOPpjagSwTjwPXTWVoRkd0AVt9gX9q7qkUKgS9A3KmA26C46a3dBspEDEAzZYYr7iG+PAzVcjtQM8iZQ1uxywqa66dBX+X5ceX3h8rQuY+nMZaAD/Ih+iyvRD3rk9lLa+ycgPBZ51usB2L91Ke0FgaeCDEa+l82ABJIWzoGJIWgFIjlshBsuIL90+BgCP6C4MQCL5TAkcAilweCeNxVZIEO9HVHYiwk4ezEWb+xyDtBHZzBpDx0/KFHjL2SBLeH8d7TSZH7SO4PahWPLhCYR1KQ1eT4g/kFsgXDf1Uvq2kbB1zJOpG66eUwDBK6iNRk6hL6FLXAInP0ylNbkEoAzQfD/HqHsTMzUMxecAMTj30PAeQEv05pcPInw9wl/5uU16RILAF0HrEeXCNfc+CNHWpiBe1y3x/88QTUTaA0oXPMNIP4zdIn2l0A3Y3Vd4uUFUDOC9zEUG8Oa710MZQHxm/BFwt0wEUtSeBgGp2ah3gPncAyQiRx3KkwwIP4xfJHbwXaYQcRGF8MY8MmkyFqFQmM2WqNHAOKrEciEm6G8SGt0MXiBelGMN4DypIh76NkA8QEEMneBjibLgSoJ+AvQHq0fRD6gAUHItzGFCQHEBxHItH8OeTpAxTAhuKslelQsG+ixIx6psRgQH0chdBDo6vtorXYJWC8bRJKdD93IJ9FavQUQH00h9CwYcFlIa7Ur4sGkZZrDCTSSiHjK9iJAfGcSqZUgX6OWpLAxFNIJ/WIsh88AqV1pzV4BiCeIA2RRHnS2/PuAeyCVZtEEKKEpcfVozd4KiMcPBWcTNRzytvwiMbBvUi0auecAsf+kNRuq2/+TRiw4iWMDrdlFeQ7SiKo84yIglriJKnQbjZ7/kEM90N3Ee58igCeTLkgzNQsDdQjEbNPhgvmA+FM0YruBLWNkz5ICb6nRuicXAmrVspw0FJgOlUL/m0gwGA5+gdLsotjAegD0Jj25/BcSfDel3dBloLMVkeDGkGD/eEq7i9AP0ieWaqgFdB3nfIfSbvBqFjkt/BY2sFCUsCDKBWmQOr2oJKdDUbEzlHZD4c9IG5XkWpDHkaaxMwI2hqP6Flos0M2Ir8rSsB1kosGrlwV0ZhclCrqTc5DcA9wAbNRSjs5ucANCl5/ZEsoOlroJKAc5ArdVRgEehmQTloeDjcLwesYXAYqBS50g8AqkDF5n+CJAaZnOS2QpATawXv8ROrsrQLLfo5NdBDAdlPA1HAUmopBlhv8AScZtEVMQcCYLai/GkrFDfwn+RGHAG3SHPEEWEzkJSe5OaHYMFAzsIm+i7L2QI0jzlB8F/w6JDuNgFIhy+2GxgJNsJ1JKL8BfkCofUEqHm9MTNYqEJ5X9QGk32IxDXl4Y2MNyOqX0bmCefADWKN8CLAITsyJJa7TWQOLltQuC2vQMpy1Yfh/8S0RtTXsT6CKaumdbOpQVQpOM4oJu0D6ceD8KNyYKIuiaURZuin47rd2HAPGziFPib/Eb5Ig0WvlQYmYWI9GF2pvDUqlugnIB+0aSfnnzMQVSpCOxAnBrKmd5bJkfwzIpD4HZgIXishqGpQB6UIZDbtAEXozjyHWpwxiGRhF/ASxjoQkC/0eswE1GKv5LsGxmmBw8DlWifSEs0ZFBbTcUAltArUAuVQE9SPbgBWCY4uecgikQHlMkw/1tAA2Ok2twg5aQJ0aRqwAnyTqd/mvw5M1mmIoioXN7XUgFgn4MLmgFqfENuQoxDF9kZ3u0tglbzjOIqxpPbvabkA5ypslC7VKtfel1AFPSsmmOdCXVrTKLNKKE8PxshJJCEGeXlgD0Jfpcgg5lwHBwNp1QssNCwFuYbALocqDygDpkJUjQAe4MIqVtHfQU5nAR4YY0fQKTKKKSoIJAj+ICGUqAVYGEaVF5LGKYqpf9BBh+B6TDHXqycZSVYTWUiVVdhhI2yPXE9bm5PMG0Ls4/De4DojqxySEqhS3EDECLIBm3AWA2COaU0OI5yDCwNpvmhs4CZaDGpLlYSZvU3+ICpIeMWbJzoacwXoovGNIzcjhvoHfobGjXdZOlcmzOhEKghLmYt4AC8bIq1ffA44py8P9IVMQoqPzhJrGfSDJ6E6CIjOsgaHKrtJ51DDNrc/njrMjvNwQ789yigiyboZSA7yXosBTQ4Q1ZztjYmXmBjgvUKodCTWnzuER9/XkLqD8FaWFkLjUBHSJkOQPOS8jHSc6q8dkLOH4c9d6pRN4DNCGel3KDDYAOck6B2djhZrV5BFXkuK3dHc54xrjBSLs0k6FJzVUkeB26GEMfElM8l8HmWfmJDGdMnC8bzpBvkIe/xPY8UF3cYHoVykD+aCjPHZa7eBbK6XTsP2qDfjJ+Ri94Sk8BSIsgCrEEUob+Iu4goEGsvAIli8UP2pAU4fSqjiVEy2ypqxjmNRekJkVL7OIA37/E8zIscGW43IZ1i8DOKUWp9kTEbBeLFjJ71DiuT0rur12WajB0EbOCXAOoa+loqf6w/MD5vs6ly/oeya/Xn1gmKcmv75JGrx3dVnEgS9KPC+jzgAowH1CHeGaWBU5L+kOuQyx3iK0bFm0km9sL0Ocncg22ARrQZ4QWJJ17G4DJNZtkc6H6NOrUdLhRhYxgZAFaHle3/pdkpAEVAKrJoHc/1CaHuFmzC66Dkwuo8H9TurHQ5FLSDgU3gG5IaKYElMhhsGkMDY6t8m0dBeh0kVyD/YAGjeU7BfQKEa8qMBUaXUs/O2YgoIGc1PRCQC3ESbhDhaVQp8IB5BpA9WnEs3tdY0+Qv/7yZ3Rk8zyg1f3kGnwBaCAnOa4w9q9lr/8+eVeA+ZkKqFWDXIP2gAbkJbLF8Izc9W8j88ojHw0AvdqRawCdumVeBhaAqVoMC8JOqCUDdUdZTa4B1K5wrCrXWAbxJHEYwqpi/5/DMkC1S+QaQLkS8cp8YxkKDtbBYRbVNBQGzgK6+ZJrAN2+yepU5YqpLGXchrn0mkITkwDlhpNrAL1nCcc1wGxhKuQ2hvdulRZGAdrNItcAqgyk7REJ0Q1sYmqUX21KDcwE1LOSawDF3WUmSLniSFXK5a8mOf+jCH6AgkHkGkCbQEXn4zzOQjkTBhgoo/iyRGyAhnHkGkDlcqrfAFl/JMlM7UP48f9AvXF9AR2jyTWAHgDKURGsZPSmWP+ajVTbZYFPAZ3JNYBqchNVu+gGM/6BvfyXpqgJ/hdiM6Dms+QaQCWTS1S7KIexV1lLu5mIrSCt/rNk9gCK0teGPQtooHybdJNl09AShaxLZdX/g0CTc+kmV94Eug6W0yCGicsJbJ2kILymqrYkD2huEeHAxlygVu2yetYz8dw+wXKPPALCpfT/YqUroO41cg1GAxr0Ue2iggzbttrI8h87JT3xu2SGAgrTp4RBMyNJB2eJEPJ6W8EvgWPB7/GqtS/MUUDntuQajAM0eFG1i1zQ8K7/8JcQdr9dVXJTSUCVefQ9YmoDGgxS7SLXXB60n2M7EDngduL5P6IcADSnr1WEijGll4Yx023eqUkMSUPWD+/5wSSHfhdACfAPkWsAFYeuUu2iElncr8OVSbHF/uHveHlbK/MufjZQe0z6Fl1jAA2eUO0imJBGqR+feKu390qfnb5W53DfqlWunQs/9e9WjWyqNYOBbjn+R64BNEJ9oGoXeTbQ0NZHyDWoD2hAfxtRqtkJuJ8+DvccoEGk+jtzDyYTCmmQjM0uQENAA7NcB3omoPfpyzL8YgEVJDaKLH28Czg/VkLSAtSo7IhqJ3kyUCT4vAQdoKZMrVU7yZOBojAymkU3A3SQ3TitVAG1i5cxu+xOQAcv1U7yZKAGPQ9I0AGao0xfoV6KgTZgMlp0PQXoYLWp9pLnYoPSHGWk49wN6OC8V7WbPBcoI1BCHMhiCYRyK+SNDCl1bAVcHymlNBcqwk9T7SbP5VvA9XL2X9Doskqq3eS5PA64foEULe4BtPBR7SbPBZobuU+KFh0ALRwbVfupEPYyF16b82TEA1+3eH+9998+Pj6+vr5FcsNm+fr6+Hzmfc3Lq9a+71uHznk3mH78Di+BUEabnOZVjwBaOOX30HaN7ZP//pXWY38V0SpB//N/V2o66pGfVbY9KsAKSONUKWpA5WnOUaodZdm89q5VNR8TXPciWNuPvPLe0QZqm99k8zCkqZwmjXZoUFNthT5a3O+2Rxecxlr6AvjPn/bOCnVtEC3w1N7jkvSA7gO/UOOezLJjruygbhbp8Kl14rCqHgjQHlDWNcz/QU4aId0121PTOnFP/BPHJyFU7rS4GyRCIbirkhQBhzbTp6bmJzA1zFve2t/isQkRa+Q2DekIqfSxJEVmQ4r0l+aT9Df7j1Y0MCabzs22Snzb9YfUWSNJERvUKu59OXosGzWumrrFzyWo5geyRiRAE+2DpDXogqaGdJHQLzY4YrTY0FACOofPkBD8skHd796m1yGXHpBHqNspH3zgM9WLXoi4hf+jjhz2g3SQkQ+WA1Qf6KxDKf3dU9BxSNEzsLQxacwQGhnoHEMpvQDQ3BLnITLRSyI+VL3QJRAdPpcuXgjlA0rsz+UXDagy3kYi1zZ3gsItPxurU7rSHA7joRadvhLbNIOtWHcRCF2TQhPiReft5CQC8+dBYs8RL3p+3oOUQR+qNLbDDtXrykGXNvi95d6AhNIPDs9jLaTMS7jyFoVJjPPi4D0mCtcHn0MS+8lbf0sg+ClGTE+1p07A6fgpmeiEiYguBy/hA5AfuJK5BqnzE5akje9AzWnNi3UhXm7MT5Awua1ZHoLU6Y0jZ0tTKPnA5AxohXQmOAdJknUVmAPUKMbpH4gg5WwY0ewPmawMxQgNjAXz2uZIfQBihkP6fGpYxrIUw52ezcGGCOO3NP+DhPhL3QIwRAKM9ixdtA+6c3Qjdg4yelkEdeh1viB3/S2tIYXiDH0DLoSbPuTHx6UOhu4J+oLfwiaSHwCwTNFZXvzHh6V42PJn036Mgf5pUGsYp1P2RCs7OJVpr+hPRyW7+c6/OHbMEHb3Xui35XdlSIBUihO7H/cLRcvnNx+TBaN1Y8EvgPzGPNDoCqfzSZGfTTXzbS8CXkKXBD3B320s/QGwdYF0EkgKmAqlvbk/kb8I1JZAlRjOWAX1mE9ASll556wHhrllzJ+XnaG8wcEMMPuRLgOneJ4ELX2Q7wfnQiMJPYYBnHnEaeAvqijHHAEe1TbxPOkz31e9LBKJTOH5DtjBHMggOVWhhRgJ2sm+57WdIA37Bj078Ny6lP53/djq3bszMoKTkpKKPJu2pKTgjAZrpqc+NeWDq//685oPuMcxxOqj7I5OBX9tgYr1t4wC9brIbCKY7SBG5BfvJ9R5csVuoeuYqAZzI1IWvkR1H7X/Z1ZFaoG/JS8fOD9lwGB97FmmHxq7D9+9QVXGfXu0LEqa9paut60aOBhfxbgItizOLaCfIzcreQAs8Fd7G8vPrG2PvPYrp02ZjV0l5fdz+S/PGRpC6oKTTJMJwZJA6RdBNwkFNXsWfvd2C8Ms6a/mlTaXsHp/y4wUb0x1xyfDL4F0qC2f0/mRzFXPx0b48/g09Buv4X39fZ+ou0iC1cOeuroe767Kaxkk72nwNwJUNaywTAB1AwIUtu+RQj+xJ+tclzisqO/hVVhBi+VTAFnNwZ/oLc/wQsAPp+NgSf//IE7gv3PCHIwENE4ObpuM8/Se21KSmOvwD4TKNz4XW1VQuZJOgnUxzv7Vf1khsSSqIMOefBkjWnCpXAky4LdsNcnJYPkBq1WckcVeCPRtYdx1G6gK8ZiJnzsBmqIF40gpdrMcDG83VI5ogYYIZvFGMf+1keEKf9+ErgpNz2N7aCfDm8KTxQ3bgxpyZTFbpfGTQfUGu96ifgzVugJELqxnmgaeFsue1n8bfAI6/9flD48As6+d3kotBxuGub4TjE8x5q4dyWwxRonMTjAWLHSEuTrFQP3hs7hNqdmBcPpe9PYi/8vY6z+g2fNKbS6O7R2+M/QIHCr6UI+A95jjtwuoigiYGuh0nij8f4YaSfq89Ip5Z9Pa+5wxUszw2DeFf5DhBXBFsc3TYRULvwJaGzg+e4faFBsM0LC/gS4Wswqd6BMZ/lKUt2b/D6zjK/n/fQw0+7B4HH8ot5aBwCYGgoTfF4hpPAP/B+RGDAKUh5Vcnq+bZqJw2qe1k6xGmEYJCRXfDJzLlypUhuEFoHYLmE06w/Oe1zDmE9Fif+sEd5pG5zcXbKBQHB/mRc4YYgDHpTUHLZ5kWE3/m1dejwi2dg3o8YlqM3kpJ/oI7Hw39xeCGUKMZpjQlsRw/s0dIfGO2PbPelHGPERs7D+8LfYE+P+e8wNnGP6pKcIhvzIs4Y3P9ytiDtmvNNZpgPSeYilEjht/178xtEL+VbWJN7iXQdP9WX8Rvwh54zvxikr1xESIdTf71Q/uDZ6F9YJqA3OAxhlmczjmZRFPrJ4iMc2DgsRTQnfezULqMfyrcaqty+U3Bl0/byvgBv/+Cq+6sVgENlNxRa/qDP9ohWrbbiKyuAwskN30gIi57Wj8U1m1YbcAO9mL8Ji6TCdsotJEZ1eWyBHVduUBJy7yEvSG0gl92Fzwwl9/b8XJUPkB51nxcm2qapOwKb8T20dDVZuUn/mops064OZ7f1eMEDoGFc9k1QYVoBWmaSvvVm0ODZ+izjv4r3GFMMHr7RIZZqJkP1w2V8Jb/5qqjSnEdawZbjumqzaFktBorAegvmpTCrMQxSxr03jVhtDSshfO+rdVbUgRnsOomj3dSrUZ5NgjUHogmzAv9qJxq0a3VG2EDL6B671BKqk2wgUZRkukHCkSJs6agWHg8AeIWTNV2+CKCsaMOnZYtQHS8NtmsJbse9UWuGSjoSa/A3nbSro19cFe2yXR2aRh8hcN2FTRYw//rtkMN9krno9Va18MfsIVkkGtVesunZC3hNffW1lDBIg3BaNBy011ryGLhwUrpBymyQMpith9h4+8sdemoqNYknwz1XqXwDKREukBw1SrrYohIqlCcWBfMZW8ym/QlVK2/cvPZobKysIMUq10iaRP4rXnexPltcgnvhmvv/7GGENJyHS+nY3jVdUKK8bvUb71jzR9hSzcOCy/OWY90UoEHMNcgDtVqwsSyLGx8X9KtbZmoDXH4bmdgo6YvDRmtqaa6ZIa1DCF+bPpMFkemGtYG0Ae97jMX1F+YL0bUt0QiI3tjC1SYlNVa2oW+jA+AKfdJGLSivGjFs05PMtTGcLaNa2eak1ZYb3nWP2Vak3NwB7WplL7VGvKTGAVRpN2KBt1YB6238/orE0KpoOKUp81Q7S5CZocqWXjekZXBfymWlUemNPD3repVlUt8cwVNUwDuExDCNxGPJc/SkkmqGsywQnMN6npZuWSGcx33WfczDJMMpmHZkSb+hLYFZ+ymuasbdoMJ2oyazM76XfVuvLD0Ec8l7dK6ROQyV5L00O1rgLEd2c2r4XJ77hpyFzH7KDubtksayI87uQmZ0rhTjB9KbN7jrljp9QsZrDfcz5uU62sbGzM+3+n9RHVyooSxmyjc0Ff1crKJfAFdt/UUa2sMJkcVtYsVVHhYZXZPbPQjbMmkzax2/md2510xVmykt0vNRRPhTLGQY7xgKtLze1wA46hMoPd3CtHORLeqvVRra0cUqPZfWJ152bpN3iQ3VjnrK2qtZXBRzw9YsxdBsKCnT3cmUWKxwcF7Wk8/pimWl0EYk7yWDzOw4+D3RgGweTR2yNCpIlck8JWXlatLyVfcRz/nM7PFqvWF4dFXC1SL5m4/N0oqVyeOL9Htb5YvMY1Kz6ytRtHPkrCfoCrcHJ5WdUK4/EIX3PEWh7y6itIX67PvzOgo2qFManHVzRc5aBqhfFp8BKXC6wediQexWW9c/wU1QojY3+Hb2qM40XVGmNzgu8JcNYaYVymeVjM9/p3Ov+pWmN8UjhdcH6tao3xWNGe03j3vQEuHvs9nE5wpNhU64xDfBhvQ7hfVKtMgp27NeIkjzgITd/Ba/ejqlUmwt6G1xORYTbVShslPZm7i7rn5sn77eP1hXOlW1XEFWU6a+lnHj08uFLGvorbHZEpbtAWpziiuL/+OZPDPRc/gRbJVdx2jsxc3s1/FmGqlSbGLjJWYpxbzhLYs1fAVE88/xUiWcAt49NsqtXmJSaiC7+djodVqy2DUSLzxT6fq1ptPmZUFzAyyOPiv675UWhizkjTN0nNY+oAEQsD3LAEWIzDIl3lndZ1blI5ELxOaIZiF4+6/y2Z6WKz1Mff6QY3RGe/Fpufd94jwp6s7GGvHS/A8DCTV5D1TWZt+leIlaWsZV6S6NSsamkmThdKTDsmaFZvN+oBh0MMe3uEQvimmbRj6tk7BU5+OazyiPxvPuz9hSfOx31two4Jy/5vvKg9Dvev/xHiiPAfjDOymclajV9fKj4UfLDb1/+J0oC1pawrFnxqmtdmennmtoguqOHm9b9GSOplwHHO1Q82VG1ANpuTOaq9i7LQxJtaejJPGfGdM3bpWsWXp36tnhB/92dhfc9Dq2CY+VRsfOYt2j2QoU753WmG/vidzmNu2/8Jj5nexnzodJz8WMkhOnHMSKGQbz4mmfA0Ix8b5+g8F/iP2yr5GQj8faFYxDc/PUp9s/xcjH4Gshlf6Xdpz0DSjxOErrMKEn1Utd/Nw0yusvniiPVqsohe1+CI/ULX2YUZ4CZ3m3IIeQXFqU7n503LEfbVDWx1x2c4egZs8+DcXyGer4HjWadz1oD+Kwgmkqe/W2ek8c9+LjWuq/a3+QhcJXw3UJS4Qw/NQbwySjz87UmuJhcAFT28E5IgQ8XSRIqlyrp3uhoOs23f1aT2d4iPZhad3Wb+n2wSe+B6Opt2C78tX1ZoWxA4tfyJWj7oCjmumDynRSmp+A6/weqR05JnvLmMaSxBZstvjh5oc8hgjK84NrnF/Gd1RDXlL6Zix7HTe+GVpnX+/fq86WtmZoxI8rNYFidlsfuTNd+k1ut5+9V/dZr8LNJ5xCWRp9xy9odU7p5PuACK+dDNS13lkN4EITBoRuIGmSaDweSMSDF6y2JGOnl0D1Rkpg9UvVzY/O3BDVAp8BvD1VXV7Oz8y6Or/knomyyeM2oyAlLGqvamW7JnH+WRUB6VZqr2pNvSaILqxTPO6PqqvejW9KupegGNMaCfag+6PV0PqV5EcQa6WVsLk+Kuj8DKGaU95RuNPlxzh8zB+iN6+RGZHU55R4OOtVOqao95HMEpCJm4cpgVPlG1tzySsRGrVS8tC6fDlqj2lMcS83tz1csLseM2Xe1ByoUw0S4sEvCfkKp3fuT0rcvfgVsK3rfpkL8kGoQhJxAbZ3mCGzWy9ADS57zsr3rN8wjoHapz/aSzvaeXKWIDkW0/0oneikgM7YRWrSWGdXSEKfrUlF6S7luo7FsQe+gnvfomoFtq2HfyV79dwoxS3d7JZPzc5AWJLwL/Fx5upNpiTWHid/UfKdysk52AgVeH6i2/WbGtePAQYS6p75/b+ulIr9nxm3jfo+v5ZnUzEPR2eN3ndG632xDzW92vFyCVFhw/dMdfa/Qfvjuyee1dCQuqCyeXR7Ybue/Vcvqk5+6ELCpXN+xMzRrMCSWxq2uGv/JXn2Bdy+lhBH7S9dNRH4T92qLTyUk+PtV9fX0DnM7hvsd8fHZ4e+/3OtPmlYj/tbqeoe/0NBqNRqPRaDQajUaj0Wg0Go1Go9FoNBqNRqPRaDQajUaj0Wg0Go1Go9FoNBqNRqPRaDQajUaj0Wg0Go1Go9FoNBqNRqPRaDQajUaj0Wg0Go1Go9GQ8v+rkynBvzfw6wAAAABJRU5ErkJggg==" />
                </defs>
            </svg>
</a>
       
                <?php endif; ?> 

        

        </div>
    </div>
</div>

<div class="container mt-2">
    <div class="row">
        <div class="col-xl-5 d-flex align-items-center justify-content-center">
            <a href="manik.php" class="callTell text-right"> Маникюр</a>

        </div>
        <div class="col-xl-2  d-flex align-items-center justify-content-center ">
         <a href="index.php"><img src="img/logo-1.png" alt=""></a>   

        </div>

        <div class="col-xl-5 d-flex align-items-center justify-content-center">
            <a href="sotr.php" class="callTell"> Специалисты</a>

        </div>
    </div>
</div>