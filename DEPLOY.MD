# Configuration instructions for auto-deployment using HE-Arc containers

## Key pair generation

Firstly, you need to generate a key pair on your local computer

```
ssh-keygen
```

Please follow the guided instructions provided by ssh-keygen. You can store the keys in a directory of your choosing, but do not put them in your default .ssh folder.

Once you have a private / public key pair, open the private key and copy its content to your clipboard.

Then, go to [GitHub Secrets](https://github.com/HE-Arc/museodio/settings/secrets) and add  a new secret. For this project, we are going to call it
```
SRVZ_WEBAPP_DEPLOY_PRIVATE_KEY
```

For the secret content, paste the private key, without space before and after the text.

## Server Configuration

We now need to configure our container to accept the private key by allowing the public key to log in via SSH.
Connect to the container's SSH port.

```
ssh poweruser@1d6.srvz-webapp.he-arc.ch -p 2297
```

Note : If you are part of this project, you should be automatically logged in using your GitHub private key.

Copy the content of the previously generated public key.
On the container, open the ~/.ssh/authorized_keys file, and paste the content at the end of the file, on a new line

```
nano ~/.ssh/authorized_keys
```

Once done, the server will accept your key and allow you to connect to the server without a password.

Add a new secret, named `HOST`, which will contain your server address, in our case, it is `1d6.srvz-webapp.he-arc.ch`
Add another secret, names `SSH_PORT`, which will contain the server's SSH port, in our case, it is `2297`
