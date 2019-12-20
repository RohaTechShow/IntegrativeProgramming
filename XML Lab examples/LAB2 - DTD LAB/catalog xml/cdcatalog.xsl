<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0"><xsl:template match="/"><html><body><h2>My CD Collection</h2><h4><xsl:value-of select="count(catalog/cd)"/> records found</h4><table border="1"><tr bgcolor="#9acd32"><th>Title</th><th>Artist</th><th>Country</th><th>Company</th><th>Price</th><th>Publishing Year</th><th>CD Category</th><th>Remark</th></tr><xsl:for-each select="catalog/cd"><xsl:sort order="descending" select="artist"/><tr><td><xsl:value-of select="title"/></td><td><xsl:value-of select="artist"/></td><td><xsl:value-of select="country"/></td><td><xsl:value-of select="company"/></td><td><xsl:value-of select="price"/></td><td><xsl:value-of select="year"/></td><td><xsl:value-of select="@category"/></td><xsl:choose><xsl:when test="price &lt;5"><td bgcolor="blue">Below market standard</td></xsl:when><xsl:when test="price &lt;10"><td bgcolor="green">Normal</td></xsl:when><xsl:otherwise><td bgcolor="red">Above market standard</td></xsl:otherwise></xsl:choose></tr></xsl:for-each></table></body></html></xsl:template></xsl:stylesheet>