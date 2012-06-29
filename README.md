OhFOSFacebookUserBundle
=======================

An example integration of FOSFacebookBundle and FOSUserBundle for Symfony 2.1

I like to start a project with the user accounts and for a Symfony2 novice the security component's configuration magic can be daunting and run up a lot of WTFpm (WTF's per minute).

This bundle might help out some people that are struggling with the set up of 2 popular bundles by FriendsOfSymfony; [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle) and [FOSFacebookBundle](https://github.com/FriendsOfSymfony/FOSFacebookBundle).

The best thing to do is to download this bundle and use it as a base for your own project. I haven't created it to work within your own project, so hence no composer.json.

Installation
=======================

1. Download this bundle and (optionally) rename it as your own. Eg /src/Acme/MyBundle and add to AppKernel

2. Add the User class to your database (use doctrine:migrations:diff or doctrine:schema:create)

3. Add your [Facebook App settings](https://developers.facebook.com/apps) to your parameters.yml

        parameters: 
            # ...
            facebook_app_id:          1234567890
            facebook_app_secret:      1234567890abcdefghijk

4. Import the bundle's config files in app/config/config.yml (replace @OhFOSFacebookUserBundle with your own bundle)

        imports:
            - { resource: parameters.yml }
            - { resource: security.yml }
            - { resource: services.yml }
            - { resource: @OhFOSFacebookUserBundle/Resources/config/config.yml }
            - { resource: @OhFOSFacebookUserBundle/Resources/config/services.yml }
            - { resource: @OhFOSFacebookUserBundle/Resources/config/security.yml }
    

This bundle also overwrites the registration form for the FOSUserBundle to include Firstname and Surname


Disclaimer
============

Nothing very clever happens with this bundle, I just followed the instructions from the [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle) and [FOSFacebookBundle](https://github.com/FriendsOfSymfony/FOSFacebookBundle) and put it into my own bundle to use as a base for other projects.