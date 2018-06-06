<?php

namespace BeHappy\SyliusRightsManagementPlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

class AdminMenuListener
{
    /**
     * @param MenuBuilderEvent $event
     */
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $subMenu = $menu->addChild('be_happy.rights_management')
            ->setLabel('Gestion des droits');

        $subMenu->addChild('be_happy.rights_management.groups', [
            'route' => 'be_happy_rights_management_admin_group_index'
        ])->setLabel('Groupe(s)');
    }
}