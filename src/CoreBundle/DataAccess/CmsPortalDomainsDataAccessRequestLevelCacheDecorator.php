<?php

/*
 * This file is part of the Chameleon System (https://www.chameleonsystem.com).
 *
 * (c) ESONO AG (https://www.esono.de)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ChameleonSystem\CoreBundle\DataAccess;

use TdbCmsPortalDomains;

class CmsPortalDomainsDataAccessRequestLevelCacheDecorator implements CmsPortalDomainsDataAccessInterface
{
    /**
     * @var CmsPortalDomainsDataAccessInterface
     */
    private $subject;
    /**
     * @var TdbCmsPortalDomains[]
     */
    private $cache = [];

    /**
     * @param CmsPortalDomainsDataAccessInterface $subject
     */
    public function __construct(CmsPortalDomainsDataAccessInterface $subject)
    {
        $this->subject = $subject;
    }

    /**
     * {@inheritdoc}
     */
    public function getPrimaryDomain($portalId, $languageId)
    {
        $cacheKey = "$portalId-$languageId";
        if (true === isset($this->cache[$cacheKey])) {
            return $this->cache[$cacheKey];
        }

        $domain = $this->subject->getPrimaryDomain($portalId, $languageId);
        $this->cache[$cacheKey] = $domain;

        return $domain;
    }

    /**
     * {@inheritdoc}
     */
    public function getPortalPrefixListForDomain(string $domainName): array
    {
        return $this->subject->getPortalPrefixListForDomain($domainName);
    }

    /**
     * {@inheritdoc}
     */
    public function getActivePortalCandidate(array $idRestrictionList, string $identifierRestriction, bool $allowInactivePortals): ?array
    {
        return $this->subject->getActivePortalCandidate($idRestrictionList, $identifierRestriction, $allowInactivePortals);
    }

    /**
     * {@inheritdoc}
     */
    public function getDomainDataByName(string $domainName): array
    {
        return $this->subject->getDomainDataByName($domainName);
    }
}
