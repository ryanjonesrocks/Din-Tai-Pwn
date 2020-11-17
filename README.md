# Din Tai Pwn 🥟
```
   ____                                    ?~~bL
  z@~ b                                    |  `U,
 ]@[  |                                   ]'  z@'
 d@~' `|, .__     _----L___----, __, .  _t'   `@j
`@L_,   "-~ `--"~-a,           `C.  ~""O_    ._`@
 q@~'   ]P       ]@[            `Y=,   `H+z_  `a@
 `@L  _z@        d@               Ya     `-@b,_a'
  `-@d@a'       )@[  Din Tai Pwn   VL      `a@@'
    aa~'   ],  .a@'                qqL  ), ./~
    @@_  _z~  _d@[                 .V@  .L_d'
     "~@@@'  ]@@@'        __      )@n@bza@-"
       `-@zzz@@@L        )@@z     ]@@=%-"
         "~~@@@@@bz_    _a@@@@z___a@K
             "~-@@@@@@@@@@@@@@@@@@~"   
                `~~~-@~~-@@~~~~~'
```

Framework to help teach application security.

## Vulnerabilities (To-do)

* Cross Site Scripting
* Command Injection
* Path Traversal
* LFI
* RFI

# To Run

Build the Dockerfile and then bind port 80 in the container to port 8080 on host machine. 

```bash
docker build -t myphpsite .
docker run -p 8080:80 -d myphpsite
```

# Stop Process
```bash
docker ps
```

find the hash of the docker process running

```bash
docker kill <hash>
```

## Todo: 
* Add apache-config.conf file

### Credz
* https://www.acunetix.com/websitesecurity/php-security-2/
#### ASCII ART
https://www.asciiart.eu/food-and-drinks/other
