<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Domain File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* Domain class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Domain extends Entity
{
    /**
    * Gets the authenticationType
    * Indicates the configured authentication type for the domain. The value is either Managed or Federated. Managed indicates a cloud managed domain where Azure AD performs user authentication.Federated indicates authentication is federated with an identity provider such as the tenant's on-premises Active Directory via Active Directory Federation Services. Not nullable
    *
    * @return string The authenticationType
    */
    public function getAuthenticationType()
    {
        if (array_key_exists("authenticationType", $this->_propDict)) {
            return $this->_propDict["authenticationType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authenticationType
    * Indicates the configured authentication type for the domain. The value is either Managed or Federated. Managed indicates a cloud managed domain where Azure AD performs user authentication.Federated indicates authentication is federated with an identity provider such as the tenant's on-premises Active Directory via Active Directory Federation Services. Not nullable
    *
    * @param string $val The authenticationType
    *
    * @return Domain
    */
    public function setAuthenticationType($val)
    {
        $this->_propDict["authenticationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the availabilityStatus
    * This property is always null except when the verify action is used. When the verify action is used, a domain entity is returned in the response. The availabilityStatus property of the domain entity in the response is either AvailableImmediately or EmailVerifiedDomainTakeoverScheduled.
    *
    * @return string The availabilityStatus
    */
    public function getAvailabilityStatus()
    {
        if (array_key_exists("availabilityStatus", $this->_propDict)) {
            return $this->_propDict["availabilityStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the availabilityStatus
    * This property is always null except when the verify action is used. When the verify action is used, a domain entity is returned in the response. The availabilityStatus property of the domain entity in the response is either AvailableImmediately or EmailVerifiedDomainTakeoverScheduled.
    *
    * @param string $val The availabilityStatus
    *
    * @return Domain
    */
    public function setAvailabilityStatus($val)
    {
        $this->_propDict["availabilityStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the isAdminManaged
    * The value of the property is false if the DNS record management of the domain has been delegated to Office 365. Otherwise, the value is true. Not nullable
    *
    * @return bool The isAdminManaged
    */
    public function getIsAdminManaged()
    {
        if (array_key_exists("isAdminManaged", $this->_propDict)) {
            return $this->_propDict["isAdminManaged"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAdminManaged
    * The value of the property is false if the DNS record management of the domain has been delegated to Office 365. Otherwise, the value is true. Not nullable
    *
    * @param bool $val The isAdminManaged
    *
    * @return Domain
    */
    public function setIsAdminManaged($val)
    {
        $this->_propDict["isAdminManaged"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isDefault
    * True if this is the default domain that is used for user creation. There is only one default domain per company. Not nullable
    *
    * @return bool The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefault
    * True if this is the default domain that is used for user creation. There is only one default domain per company. Not nullable
    *
    * @param bool $val The isDefault
    *
    * @return Domain
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isInitial
    * True if this is the initial domain created by Microsoft Online Services (companyname.onmicrosoft.com). There is only one initial domain per company. Not nullable
    *
    * @return bool The isInitial
    */
    public function getIsInitial()
    {
        if (array_key_exists("isInitial", $this->_propDict)) {
            return $this->_propDict["isInitial"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isInitial
    * True if this is the initial domain created by Microsoft Online Services (companyname.onmicrosoft.com). There is only one initial domain per company. Not nullable
    *
    * @param bool $val The isInitial
    *
    * @return Domain
    */
    public function setIsInitial($val)
    {
        $this->_propDict["isInitial"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isRoot
    * True if the domain is a verified root domain. Otherwise, false if the domain is a subdomain or unverified. Not nullable
    *
    * @return bool The isRoot
    */
    public function getIsRoot()
    {
        if (array_key_exists("isRoot", $this->_propDict)) {
            return $this->_propDict["isRoot"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isRoot
    * True if the domain is a verified root domain. Otherwise, false if the domain is a subdomain or unverified. Not nullable
    *
    * @param bool $val The isRoot
    *
    * @return Domain
    */
    public function setIsRoot($val)
    {
        $this->_propDict["isRoot"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isVerified
    * True if the domain has completed domain ownership verification. Not nullable
    *
    * @return bool The isVerified
    */
    public function getIsVerified()
    {
        if (array_key_exists("isVerified", $this->_propDict)) {
            return $this->_propDict["isVerified"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isVerified
    * True if the domain has completed domain ownership verification. Not nullable
    *
    * @param bool $val The isVerified
    *
    * @return Domain
    */
    public function setIsVerified($val)
    {
        $this->_propDict["isVerified"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the supportedServices
    * The capabilities assigned to the domain.Can include 0, 1 or more of following values: Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline, SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune The values which you can add/remove using Graph API include: Email, OfficeCommunicationsOnline, YammerNot nullable
    *
    * @return string The supportedServices
    */
    public function getSupportedServices()
    {
        if (array_key_exists("supportedServices", $this->_propDict)) {
            return $this->_propDict["supportedServices"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportedServices
    * The capabilities assigned to the domain.Can include 0, 1 or more of following values: Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline, SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune The values which you can add/remove using Graph API include: Email, OfficeCommunicationsOnline, YammerNot nullable
    *
    * @param string $val The supportedServices
    *
    * @return Domain
    */
    public function setSupportedServices($val)
    {
        $this->_propDict["supportedServices"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * Status of asynchronous operations scheduled for the domain.
    *
    * @return DomainState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "Microsoft\Graph\Model\DomainState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new DomainState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    * Status of asynchronous operations scheduled for the domain.
    *
    * @param DomainState $val The state
    *
    * @return Domain
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    

     /** 
     * Gets the serviceConfigurationRecords
    * DNS records the customer adds to the DNS zone file of the domain before the domain can be used by Microsoft Online services.Read-only, Nullable
     *
     * @return array The serviceConfigurationRecords
     */
    public function getServiceConfigurationRecords()
    {
        if (array_key_exists("serviceConfigurationRecords", $this->_propDict)) {
           return $this->_propDict["serviceConfigurationRecords"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the serviceConfigurationRecords
    * DNS records the customer adds to the DNS zone file of the domain before the domain can be used by Microsoft Online services.Read-only, Nullable
    *
    * @param DomainDnsRecord $val The serviceConfigurationRecords
    *
    * @return Domain
    */
    public function setServiceConfigurationRecords($val)
    {
		$this->_propDict["serviceConfigurationRecords"] = $val;
        return $this;
    }
    

     /** 
     * Gets the verificationDnsRecords
    * DNS records that the customer adds to the DNS zone file of the domain before the customer can complete domain ownership verification with Azure AD.Read-only, Nullable
     *
     * @return array The verificationDnsRecords
     */
    public function getVerificationDnsRecords()
    {
        if (array_key_exists("verificationDnsRecords", $this->_propDict)) {
           return $this->_propDict["verificationDnsRecords"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the verificationDnsRecords
    * DNS records that the customer adds to the DNS zone file of the domain before the customer can complete domain ownership verification with Azure AD.Read-only, Nullable
    *
    * @param DomainDnsRecord $val The verificationDnsRecords
    *
    * @return Domain
    */
    public function setVerificationDnsRecords($val)
    {
		$this->_propDict["verificationDnsRecords"] = $val;
        return $this;
    }
    

     /** 
     * Gets the domainNameReferences
    * Read-only, Nullable
     *
     * @return array The domainNameReferences
     */
    public function getDomainNameReferences()
    {
        if (array_key_exists("domainNameReferences", $this->_propDict)) {
           return $this->_propDict["domainNameReferences"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the domainNameReferences
    * Read-only, Nullable
    *
    * @param DirectoryObject $val The domainNameReferences
    *
    * @return Domain
    */
    public function setDomainNameReferences($val)
    {
		$this->_propDict["domainNameReferences"] = $val;
        return $this;
    }
    
}