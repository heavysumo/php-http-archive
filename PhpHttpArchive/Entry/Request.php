<?php
/**
 * Copyright (c) 2010, Jean-Marc Fontaine
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *     * Redistributions of source code must retain the above copyright
 *       notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *     * Neither the name of the <organization> nor the
 *       names of its contributors may be used to endorse or promote products
 *       derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> BE LIABLE FOR ANY
 * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
 * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @package PHP HTTP Archive
 * @author Jean-Marc Fontaine <jm@jmfontaine.net>
 * @copyright 2010 Jean-Marc Fontaine <jm@jmfontaine.net>
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 */

class PhpHttpArchive_Entry_Request extends PhpHttpArchive_Element_Abstract
{
    protected $_cookies = array();
    protected $_headers = array();
    protected $_httpVersion;
    protected $_method;
    protected $_queryString;
    protected $_url;

    protected function _loadData(array $data)
    {
        $this->setCookies($data['cookies']);
        $this->setHeaders($data['headers']);
        $this->setHttpVersion($data['httpVersion']);
        $this->setMethod($data['method']);
        $this->setQueryString($data['queryString']);
        $this->setUrl($data['url']);
    }

    public function getCookies()
    {
        return $this->_cookies;
    }

    public function getHeaders()
    {
        return $this->_headers;
    }

    public function getHttpVersion()
    {
        return $this->_httpVersion;
    }

    public function getMethod()
    {
        return $this->_method;
    }

    public function getUrl()
    {
        return $this->_url;
    }

    public function setCookies(array $cookies)
    {
        $this->_cookies = $cookies;
        return $this;
    }

    public function setHeaders(array $headers)
    {
        $this->_headers = $headers;
        return $this;
    }

    public function setHttpVersion($version)
    {
        $this->_httpVersion = (string) $version;
        return $this;
    }

    public function setMethod($method)
    {
        $this->_method = (string) $method;
        return $this;
    }

    public function setUrl($url)
    {
        $this->_url = (string) $url;
        return $this;
    }
}