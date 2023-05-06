using Microsoft.EntityFrameworkCore;

namespace WebApplication1.Entities
{
    public class DataBase:DbContext
    {
        internal static IEnumerable<object> UserTables;

        public DataBase()
        {

        }

        public DataBase(DbContextOptions<DataBase> options) : base(options)
        {

        }

        public DbSet<UserTable> Users { get; set; }
    }
}