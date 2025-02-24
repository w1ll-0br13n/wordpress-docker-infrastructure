<?php

return array (
  'front-header' => 
  array (
    'navigation' => 
    array (
      'props' => 
      array (
        'showTopBar' => false,
        'sticky' => true,
        'overlap' => false,
      ),
      'style' => 
      array (
        'padding' => 
        array (
          'top' => 
          array (
            'value' => 5,
          ),
        ),
      ),
    ),
    'logo' => 
    array (
      'props' => 
      array (
        'layoutType' => 'text',
      ),
    ),
    'header-menu' => 
    array (
      'props' => 
      array (
        'hoverEffect' => 
        array (
          'type' => 'none',
          'group' => 
          array (
            'border' => 
            array (
              'transition' => 'effect-borders-grow grow-from-left',
            ),
          ),
        ),
      ),
    ),
    'hero' => 
    array (
      'props' => 
      array (
        'heroSection' => 
        array (
          'layout' => 'textOnly',
        ),
      ),
      'style' => 
      array (
        'descendants' => 
        array (
          'outer' => 
          array (
            'padding' => 
            array (
              'top' => 
              array (
                'value' => 200,
              ),
              'bottom' => 
              array (
                'value' => 230,
              ),
            ),
            'background' => 
            array (
              'overlay' => 
              array (
                'enabled' => true,
                'gradient_opacity' => 60,
              ),
              'type' => 'image',
              'image' => 
              array (
                'attachment' => 'fixed',
                'size' => 'cover',
              ),
            ),
          ),
        ),
      ),
      'full_height' => false,
      'hero_column_width' => 80,
    ),
    'buttons' =>
    array (
      'value' => 
      array (
        0 => 
        array (
          'label' => 'View Features',
        ),
        1 => 
        array (
          'label' => 'Contact us',
        ),
      ),
    ),
  ),
  'header' => 
  array (
    'navigation' => 
    array (
      'props' => 
      array (
        'showTopBar' => false,
        'sticky' => true,
        'overlap' => false,
      ),
      'style' => 
      array (
        'padding' => 
        array (
          'top' => 
          array (
            'value' => 5,
          ),
        ),
      ),
    ),
    'header-menu' => 
    array (
      'props' => 
      array (
        'hoverEffect' => 
        array (
          'type' => 'none',
          'group' => 
          array (
            'border' => 
            array (
              'transition' => 'effect-borders-grow grow-from-left',
            ),
          ),
        ),
      ),
    ),
    'logo' => 
    array (
      'props' => 
      array (
        'layoutType' => 'text',
      ),
    ),
    'hero' => 
    array (
      'style' => 
      array (
        'descendants' => 
        array (
          'outer' => 
          array (
            'padding' => 
            array (
              'top' => 
              array (
                'value' => 100,
              ),
              'bottom' => 
              array (
                'value' => 100,
              ),
            ),
          ),
        ),
      ),
    ),
  )
);
