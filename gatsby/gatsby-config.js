module.exports = {
  siteMetadata: {
    title: `Gatsby + Drupal 8`,
    slogan: `A Match Made in Heaven`,
    description: `A demo site made in our Gatsby + Drupal training session at Florida DrupalCamp 2019!`,
    author: `@porkloin`,
  },
  plugins: [
    `gatsby-plugin-react-helmet`,
    {
      resolve: `gatsby-source-filesystem`,
      options: {
        name: `images`,
        path: `${__dirname}/src/images`,
      },
    },
    `gatsby-transformer-sharp`,
    `gatsby-plugin-sharp`,
    {
      resolve: `gatsby-plugin-manifest`,
      options: {
        name: `gatsby-starter-default`,
        short_name: `starter`,
        start_url: `/`,
        background_color: `#663399`,
        theme_color: `#663399`,
        display: `minimal-ui`,
        icon: `src/images/gatsby-icon.png`, // This path is relative to the root of the site.
      },
    },
    {
      resolve: `gatsby-source-drupal`,
      options: {
				// This is the address of our Drupal docker container - not the address exposed to our client machine.
				// If you were working with Gatsby on your local machine with a remote Drupal site, you could point
				// it directly to it's web address.
        baseUrl: `http://drupal/`,
        apiBase: `jsonapi`,
      },
    },
    // this (optional) plugin enables Progressive Web App + Offline functionality
    // To learn more, visit: https://gatsby.app/offline
    // 'gatsby-plugin-offline',
  ],
}
