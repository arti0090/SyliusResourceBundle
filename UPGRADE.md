## UPGRADE FOR `1.10.x`

### FROM `1.9.x` to `1.10.x`

- failed form response status code returned from the `ResourceController::createAction` and `ResourceController::updateAction` changed from `200` to `422`

  see: https://github.com/Sylius/SyliusResourceBundle/pull/488. This is technically a bug fix, but could break the application
  if your logic is based on this bugged previous status code  

## UPGRADE FOR `1.7.x`

### FROM `1.6.x` TO `1.7.x`

#### Dependencies

- `jms/serializer` and `jms/serializer-bundle` from `2.x` to `3.x`:
  
  follow their upgrade process for [the component](https://github.com/schmittjoh/serializer/blob/master/UPGRADING.md#from-2x-to-300) 
  and [the bundle](https://github.com/schmittjoh/JMSSerializerBundle/blob/master/UPGRADING.md#upgrading-from-2x-to-30);
  if you're getting errors about serializing the entity manager, consider changing the serialized type
  from `array` to `iterable` for Doctrine collections in your models

- `friendsofsymfony/rest-bundle` from `2.x` to `3.x`:
  
  follow their [upgrade process](https://github.com/FriendsOfSymfony/FOSRestBundle/blob/3.x/UPGRADING-3.0.md);
  if you're using this bundle to render HTML templates as well, replace it with direct calls to Twig
  and handle only the REST logic via this bundle ([see this PR for more](https://github.com/Sylius/SyliusResourceBundle/pull/167/files))
  
- `willdurand/hateoas` from `2.x` to `3.x`:
  
  follow their [upgrade process](https://github.com/willdurand/Hateoas/blob/master/UPGRADING.md#from-2120-to-300)
  
- from `white-october/pagerfanta-bundle` `^1.0` to `babdev/pagerfanta-bundle` `^2.5`:
  
  follow their [upgrade process](https://github.com/BabDev/PagerfantaBundle/blob/2.x/UPGRADE-2.0.md#migrate-from-whiteoctoberpagerfantabundle-1x-to-babdevpagerfantabundle-20)  

- `doctrine/persistence` from `1.x` to `2.x` (if applicable):
  
  replace `Doctrine\Common\Persistence` with `Doctrine\Persistence` in your codebase

#### Example

You can find an exemplary upgrade to this version of ResourceBundle on Sylius repository in [this PR](https://github.com/Sylius/Sylius/pull/12084).

## UPGRADE FOR `1.3.x`

### FROM `1.3.x` TO `1.3.13`

If you're using an "Accept" HTTP header to set the serialization groups, you need to define allowed groups
either by passing them as default in `serialization_groups` setting or marking them as allowed in 
`allowed_serialization_groups` setting, both settings are set in the route definition (under `_sylius` key).
