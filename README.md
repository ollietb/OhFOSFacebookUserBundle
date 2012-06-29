OhFOSFacebookUserBundle
=======================

An example integration of FOSFacebookBundle and FOSUserBundle for Symfony 2.1

I like to start a project with the user accounts and for someone who's only just starting Symfony2, the security component's configuration magic can be daunting, racking up a lot of WTFpm (WTF's per minute).

This bundle might help out some people that are struggling with the set up of two of the most popular bundles by FriendsOfSymfony; [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle) and [FOSFacebookBundle](https://github.com/FriendsOfSymfony/FOSFacebookBundle).

Probably the best way to use this code is to download this bundle and use it as a base for your own project. I haven't created it to work as a bundle within your own project, so hence no composer.json.

Installation
=======================

1. Download this bundle and (optionally) rename it as your own. Eg /src/Acme/MyBundle and add to AppKernel. If you are renaming it as a base for your own project then you will need to search and replace the bundle name to your own.

2. Add the provided User class to your database (use doctrine:migrations:diff or doctrine:schema:create)

3. Add your [Facebook App settings](https://developers.facebook.com/apps) to your parameters.yml

        parameters: 
            # ...
            facebook_app_id:          1234567890
            facebook_app_secret:      1234567890abcdefghijk

4. Import the bundle's config files in app/config/config.yml (if necessary replace @OhFOSFacebookUserBundle with your own bundle)

        imports:
            - { resource: parameters.yml }
            - { resource: security.yml }
            - { resource: services.yml }
            - { resource: @OhFOSFacebookUserBundle/Resources/config/config.yml }
            - { resource: @OhFOSFacebookUserBundle/Resources/config/services.yml }
            - { resource: @OhFOSFacebookUserBundle/Resources/config/security.yml }
    
5. Do the same with your routing.yml

        OhEventstagramBundle:
            resource: "@OhFOSFacebookUserBundle/Resources/config/routing.yml"
            prefix:   /


This bundle also overwrites the registration form for the FOSUserBundle to include "firstname" and "surname" as a start for implementing your own User model.


Disclaimer
============

Nothing very clever happens with this bundle, I just followed the instructions from the [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle) and [FOSFacebookBundle](https://github.com/FriendsOfSymfony/FOSFacebookBundle), put it into my own bundle to use as a base for new projects.

I'm not planning on maintaining this bundle, but maybe someone can pick it up and add some more connectors.