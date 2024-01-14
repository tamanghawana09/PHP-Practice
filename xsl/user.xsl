<?xml version ="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/college">
        <html>
            <body>
            <h1>Users</h1>
            <ul>
                <xsl:for-each select="student">
                <li>
                    <xsl:value-of select="name" />
                </li>
                </xsl:for-each>
            </ul>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>